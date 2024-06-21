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

    public function update(Request $request, Comment $comment) {
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

        if ($dosya) {
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
        $comments = Comment::where('approval_status',1)->get();
        return view('client.comments.comments',compact('comments'));
    }//End

    public function addComment(Request $request){
        // print_r($request->all());die;

        
        // if ($request->hasFile('file')) {
        //     $file = $request->file('file');
        //     $fileName = time() . '_' . $file->getClientOriginalName();
        //     $file->move(public_path('kullanici_gorselleri'), $fileName);
        // }    


        $comment = new Comment();
        $comment->full_name = $request->input('name');
        $comment->email = $request->input('email');
        $comment->phone = $request->input('phone');
        $comment->title = $request->input('title');
        $comment->content = $request->input('comment');
        // $comment->image = $fileName ?? '';
        $comment->approval_status = 0;

        $comment->save();

        return redirect()->back()->with('success','Yorumunuz teşekkür ederiz. En kısa sürede incelenip yayına alınacaktır.');
     
    }//End

    public function adminAllComments(){
        $comments = Comment::all();
        return view('admin.comments.all_comments',compact('comments'));
    }//End

    public function approveComment($id){
        $comment = Comment::find($id);
        $comment->approval_status = 1;
        $comment->save();

        return redirect()->back()->with('success','Yorum başarıyla onaylandı.');
    }//End

    public function rejectComment($id){
        $comment = Comment::find($id);
        $comment->approval_status = 2;
        $comment->save();

        return redirect()->back()->with('warning','Yorum reddedildi.');
    }//End
}
