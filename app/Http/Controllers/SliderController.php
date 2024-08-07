<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Darryldecode\Cart\Validators\Validator;


class SliderController extends Controller
{

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'short_content' => 'required'

        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.sliders.edit', $slider->id)
                ->withErrors($validator)
                ->withInput();
        }


        $dosya = $request->file('image');
        $dosyaAdi = $slider->image;

        // Eğer dosya seçilmediyse veya geçerli bir dosya değilse hata döndür
        if ($dosya) {
            // Dosyayı yükleme klasörüne kaydetme
            $dosyaAdi = $dosya->getClientOriginalName(); // Dosya adını alın
            $dosya->move(public_path('uploads'), $dosyaAdi); // Dosyayı uploads klasörüne kaydet

        }



        $slider->update([
            'image' => $dosyaAdi
        ]);

        return redirect()->route('admin.sliders.index')
            ->with('success', 'slider başarıyla güncellendi.');
    }

    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'image' => 'required|image',         // Ensure 'image' is an image file
            'mobile_image' => 'required|image',  // Ensure 'mobile_image' is an image file
        ]);

        // Retrieve the uploaded files
        $imageFile = $request->file('image');
        $mobileImageFile = $request->file('mobile_image');

        // Handle the 'image' file
        if ($imageFile && $imageFile->isValid()) {
            $imageFileName = $imageFile->getClientOriginalName();
            $imageFile->move(public_path('images'), $imageFileName);
        } else {
            return redirect()->back()->with('error', 'Geçerli bir dosya seçin.');
        }

        // Handle the 'mobile_image' file
        if ($mobileImageFile && $mobileImageFile->isValid()) {
            $mobileImageFileName = $mobileImageFile->getClientOriginalName();
            $mobileImageFile->move(public_path('images'), $mobileImageFileName);
        } else {
            return redirect()->back()->with('error', 'Geçerli bir dosya seçin.');
        }

        // Create a new Slider record
        Slider::create([
            'image' => $imageFileName,
            'mobile_image' => $mobileImageFileName, // Store the mobile image name
        ]);

        return redirect()->route('admin.sliders.index')
            ->with('success', 'Slider başarıyla oluşturuldu.');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect()->route('admin.sliders.index')
            ->with('success', 'slider başarıyla silindi.');
    }
}
