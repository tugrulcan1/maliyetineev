<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = SiteSetting::all();

        return view('admin.site-settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         $request->validate([
             'key' => 'required|string|max:255',
             'value' => 'nullable|string',
             'file' => 'nullable|file|mimes:jpg,png,jpeg,gif,svg|max:2048',
         ]);
     
         $setting = new SiteSetting();
         $setting->key = $request->key;
     
         if ($request->hasFile('file')) {
             $file = $request->file('file');
             $fileName = time() . '_' . $file->getClientOriginalName();
             $filePath = $file->storeAs('gorseller', $fileName, 'public');
             // Dosyanın genel erişim yolunu al ve veritabanına kaydet
             $setting->value = asset('storage/' . $filePath);
         } else {
             $setting->value = $request->value;
         }
     
         $setting->save();
         Session::flash('alertSuccessMessage', 'Ayar Kaydı Başarılı!');
     
         return redirect()->back();
     }
     
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        SiteSetting::where('key', $request->key)->update(['value' => $request->value]);
        Session::flash('alertSuccessMessage', 'Ayar Güncelleme Başarılı!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request)
    {
        SiteSetting::where('key', $request->key)->delete();
        Session::flash('alertSuccessMessage', 'Ayar Silme Başarılı!');
    }
}
