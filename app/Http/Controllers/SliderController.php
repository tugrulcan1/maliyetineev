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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB sınır
            'mobile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB sınır
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.sliders.edit', $slider->id)
                ->withErrors($validator)
                ->withInput();
        }

        // Dosya işlemleri
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time() . '-' . $imageFile->getClientOriginalName(); // Dosya adını benzersiz hale getirme
            $imageFile->move(public_path('images'), $imageName); // Dosyayı uploads klasörüne kaydetme
            $slider->image = $imageName; // Yeni dosya adını güncelleme
        }

        if ($request->hasFile('mobile_image')) {
            $mobileImageFile = $request->file('mobile_image');
            $mobileImageName = time() . '-' . $mobileImageFile->getClientOriginalName(); // Dosya adını benzersiz hale getirme
            $mobileImageFile->move(public_path('images'), $mobileImageName); // Dosyayı uploads klasörüne kaydetme
            $slider->mobile_image = $mobileImageName; // Yeni dosya adını güncelleme
        }

        // Diğer alanları güncelleme (örneğin: title, content, vb.)
        // Eğer başka alanlar varsa, bunları burada güncelleyebilirsiniz.

        $slider->save(); // Dosya adlarını güncelleyip kaydediyoruz

        return redirect()->route('admin.sliders.index')
            ->with('success', 'Slider başarıyla güncellendi.');
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
