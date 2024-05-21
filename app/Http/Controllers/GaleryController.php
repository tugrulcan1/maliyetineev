<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Darryldecode\Cart\Validators\Validator;


class GaleryController extends Controller
{
    public function create()
    {
        return view('admin.projects.create');
    }
    
    public function edit(Galery $galery)
    {
        return view('admin.projects.edit', compact('galery'));
    }
    
    public function update(Request $request, Galery $galery)
    {
        $validator = Validator::make($request->all(), [
            'project_id' => 'required',
            'image' => 'required'
            
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('admin.projects.edit', $galery->id)
                ->withErrors($validator)
                ->withInput();
        }
    
    
        $dosya = $request->file('image');
        $dosyaAdi=$galery->image;
    
        // Eğer dosya seçilmediyse veya geçerli bir dosya değilse hata döndür
        if ($dosya) {
             // Dosyayı yükleme klasörüne kaydetme
        $dosyaAdi = $dosya->getClientOriginalName(); // Dosya adını alın
        $dosya->move(public_path('uploads'), $dosyaAdi); // Dosyayı uploads klasörüne kaydet
    
        }
    
    
    
        $galery->update([
            'image' => $dosyaAdi
        ]);
    
        return redirect()->route('admin.projects.index')
            ->with('success', 'galery başarıyla güncellendi.');
    }
    
        public function index()
    {
        $galerys = Galery::all();
        return view('admin.projects.index', compact('galerys'));
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
    
    
    
        Galery::create([
            
            'image' => $dosyaAdi,
        ]);
    
        return redirect()->route('admin.projects.index')
            ->with('success', 'galery başarıyla oluşturuldu.');
    }
    
    public function destroy(Galery $galery)
    {
        $galery->delete();
    
        return redirect()->route('admin.projects.index')
            ->with('success', 'galery başarıyla silindi.');
    }
    
}
