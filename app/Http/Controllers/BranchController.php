<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Darryldecode\Cart\Validators\Validator;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {

        $branchs = Branch::all();
        // print_r($yorums);die;

        return view('admin.branchs.index', compact('branchs'));
    }
    public function show(Branch $branch)
    {
        return view('client.branchsdetail', compact('branch'));
    }
    public function asd()
    {
        $branchs = Branch::all();
       return view('client.branchs',compact('branchs'));
    }


    public function create()
    {
        return view('admin.branchs.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'description' => 'required',
            'phone' => 'required',
            'image' => 'required',
        ]);

        $dosya = $request->file('image');

        // Eğer dosya seçilmediyse veya geçerli bir dosya değilse hata döndür
        if (!$dosya || !$dosya->isValid()) {
            return redirect()->back()->with('error', 'Geçerli bir dosya seçin.');
        }

        // Dosyayı yükleme klasörüne kaydetme
        $dosyaAdi = $dosya->getClientOriginalName(); // Dosya adını alın
        $dosya->move(public_path('uploads'), $dosyaAdi); // Dosyayı uploads klasörüne kaydet



        Branch::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'phone' => $request->input('phone'),
            'image' => $dosyaAdi,
        ]);

        return redirect()->route('admin.branchs.index')
            ->with('success', 'yorum başarıyla oluşturuldu.');
    }

    public function edit(Branch $branch)
    {
        return view('admin.branchs.edit', compact('branch'));
    }

    public function update(Request $request, Branch $branch)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'phone' => 'required'

            
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.branchs.edit', $branch->id)
                ->withErrors($validator)
                ->withInput();
        }

    
        $dosya = $request->file('image');
        $dosyaAdi=$branch->image;

        // Eğer dosya seçilmediyse veya geçerli bir dosya değilse hata döndür
        if ($dosya) {
             // Dosyayı yükleme klasörüne kaydetme
        $dosyaAdi = $dosya->getClientOriginalName(); // Dosya adını alın
        $dosya->move(public_path('uploads'), $dosyaAdi); // Dosyayı uploads klasörüne kaydet

        }



        $branch->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'phone' => $request->input('phone'),
            'image' => $dosyaAdi
        ]);

        return redirect()->route('admin.branchs.index')
            ->with('success', 'branch başarıyla güncellendi.');
    }

    public function destroy(Branch $branch)
    {
        $branch->delete();

        return redirect()->route('admin.branchs.index')
            ->with('success', 'branch başarıyla silindi.');
    }
}
