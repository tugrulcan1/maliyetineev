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
}