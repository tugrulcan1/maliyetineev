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
    $dosyaAdi=$slider->image;

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
     $request->validate([
        'image' => 'required',
    ]);

    $dosya = $request->file('image');

    // Eğer dosya seçilmediyse veya geçerli bir dosya değilse hata döndür
    if (!$dosya || !$dosya->isValid()) {
        return redirect()->back()->with('error', 'Geçerli bir dosya seçin.');
    }

    // Dosyayı yükleme klasörüne kaydetme
    $dosyaAdi = $dosya->getClientOriginalName(); // Dosya adını alın
    $dosya->move(public_path('images'), $dosyaAdi); // Dosyayı uploads klasörüne kaydet



    Slider::create([
        
        'image' => $dosyaAdi,
    ]);

    return redirect()->route('admin.sliders.index')
        ->with('success', 'slider başarıyla oluşturuldu.');
}

public function destroy(Slider $slider)
{
    $slider->delete();

    return redirect()->route('admin.sliders.index')
        ->with('success', 'slider başarıyla silindi.');
}

}
