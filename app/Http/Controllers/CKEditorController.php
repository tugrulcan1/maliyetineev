<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CKEditorController extends Controller
{
    public function upload(Request $request)
    {
        $uploadedImage = $request->file('upload');
        $dosyaAdi = $uploadedImage->getClientOriginalName(); 
        $uploadedImage->move(public_path('uploads'), $dosyaAdi); 

        // CKEditor ile uyumlu JSON yanıtı oluşturma
        return response()->json([
            'uploaded' => true,
            'url' => asset('storage/' . $dosyaAdi)
        ]);
    }

}
