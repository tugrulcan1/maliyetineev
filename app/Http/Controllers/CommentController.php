<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Darryldecode\Cart\Validators\Validator;


class CommentController extends Controller
{
    public function index()
    {

        $comments = Comment::all();
        // print_r($yorums);die;

        return view('admin.comments.index', compact('comments'));
    }
    public function show(Comment $comment)
    {
        return view('client.commentsdetail', compact('comment'));
    }
    public function asd()
    {
        $comments = Comment::all();
       return view('client.comments',compact('comments'));
    }


    public function create()
    {
        return view('admin.comments.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'content' => 'required',
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



        Comment::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $dosyaAdi,
        ]);

        return redirect()->route('admin.comments.index')
            ->with('success', 'yorum başarıyla oluşturuldu.');
    }

    public function edit(Comment $comment)
    {
        return view('admin.comments.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required'
            
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.comments.edit', $comment->id)
                ->withErrors($validator)
                ->withInput();
        }

    
        $dosya = $request->file('image');
        $dosyaAdi=$comment->image;

        // Eğer dosya seçilmediyse veya geçerli bir dosya değilse hata döndür
        if ($dosya) {
             // Dosyayı yükleme klasörüne kaydetme
        $dosyaAdi = $dosya->getClientOriginalName(); // Dosya adını alın
        $dosya->move(public_path('uploads'), $dosyaAdi); // Dosyayı uploads klasörüne kaydet

        }



        $comment->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $dosyaAdi
        ]);

        return redirect()->route('admin.comments.index')
            ->with('success', 'comment başarıyla güncellendi.');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->route('admin.comments.index')
            ->with('success', 'comment başarıyla silindi.');
    }

    public function commentGet(){
        $comments = Comment::all();
        return view('client.comments.comments',compact('comments'));
    }//End
}
