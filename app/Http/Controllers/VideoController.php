<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Darryldecode\Cart\Validators\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index(){
        $videos = DB::table('videos')->get();
        return view('client.maliyetineev_videos',compact('videos'));
    }//End

    public function reklam_tanitim_filmleri(){
        $reklam_tanitim_filmleri = DB::table('reklam_tanitim_filmleri')->get();
        return view('client.reklam_tanitim_filmleri',compact('reklam_tanitim_filmleri'));
    }

    public function createVideo(){
        return view('admin.videos.create');
    }//End

    public function addVideo(Request $request){
        $request->validate([
            'youtube_url' => 'required|url',
        ]);

       DB::table('videos')->insert([
            'url'        => $request->youtube_url,
            'created_at' => now()
        ]);

        return redirect()->back()->with('success','Başarıyla Kaydedildi.');
    }//End

    public function createReklamTanitimFilmleri(){
        return view('admin.videos.reklam_tanitim_filmleri');
    }//End

    public function addReklamTanitimFilmleri(Request $request){
        $request->validate([
            'youtube_url' => 'required|url',
        ]);

       DB::table('reklam_tanitim_filmleri')->insert([
            'url'        => $request->youtube_url,
            'created_at' => now()
        ]);

        return redirect()->back()->with('success','Başarıyla Kaydedildi.');
    }//End

    public function tapuAlanMusteriler(){
        $tapu_alan_musteriler = DB::table('tapu_alan_musteriler')->get();
        return view('admin.tapu_alan_musteriler.index',compact('tapu_alan_musteriler'));
    }//End

    public function addTapuAlanMusteriler(Request $request){

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName(); // Benzersiz dosya adı oluştur
            $file->move(public_path('tapu_alan_musteriler'), $fileName);
        }

        DB::table('tapu_alan_musteriler')->insert([
            'image'           => $fileName,
            'musteri_bilgisi' => $request->musteri_bilgisi
        ]);

        return redirect()->back()->with('success','Başarıyla Kaydedildi.');

    }//End

    public function tapuAlanMusterilerimiz(){
        $tapu_alan_musterilerimiz = DB::table('tapu_alan_musteriler')->get();       
        return view('client.tapu_alan_musterilerimiz',compact('tapu_alan_musterilerimiz'));
    }//End

    public function basindaBiz(){
        $basinda_biz = DB::table('basinda_biz')->get();
        return view('admin.basinda_biz.index',compact('basinda_biz'));
    }//End

    public function addBasindaBiz(Request $request){

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName(); // Benzersiz dosya adı oluştur
            $file->move(public_path('basinda_biz'), $fileName);
        }

        DB::table('basinda_biz')->insert([
            'image'      => $fileName,
            'info'       => $request->info,
            'created_at' => now()
        ]);

        return redirect()->back()->with('success','Başarıyla Kaydedildi.');

    }//End

    public function basindaBizz(){
        $basinda_biz = DB::table('basinda_biz')->get();       
        return view('client.basinda_biz',compact('basinda_biz'));
    }//End
    
}