<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;
use Mail;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'job' => 'required',
            'message' => 'required',
            'terms_condition' => 'required',
        ], [
            'name.required' => 'Ad alanı gereklidir.',
            'email.required' => 'E-posta alanı gereklidir.',
            'email.email' => 'Geçerli bir e-posta adresi girin.',
            'phone.required' => 'Telefon alanı gereklidir.',
            'job.required' => 'Meslek alanı gereklidir.',
            'message.required' => 'Mesaj alanı gereklidir.',
            'terms_condition.required' => 'Kişisel Verilerin Korunması Hakkında Aydınlatma Yazısını kabul etmelisiniz.',
        ]);


        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $job = $request->input('job');
        $message = $request->input('message');


        Form::create([
            'name' => $name,
            'email' => $email ,
            'phone' =>  $phone,
            "job" => $job,
            "message"=> $message
        ]);


        return redirect()->back()->with('success', 'Mesajınız İletildi');
    }


    public function submitContactForm(Request $request)
    {

        $request->validate([
            'name'    => 'required',
            'email'   => 'required',
            'phone'   => 'required',
            'job'     => 'required',
            'message' => 'required',
        ],[
            'name.required'    => 'Ad alanı gereklidir.',
            'email.required'   => 'E-posta alanı gereklidir.',
            'email.email'      => 'Geçerli bir e-posta adresi girin.',
            'phone.required'   => 'Telefon alanı gereklidir.',
            'job.required'     => 'Meslek seçimi yapınız.',
            'message.required' => 'Lütfen mesajınızı yazınız.'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $job = $request->input('job');
        $message = $request->input('message');


        Form::create([
            'name' => $name,
            'email' => $email ,
            'phone' =>  $phone,
            "job" => $job,
            "message"=> $message
        ]);




        return redirect()->back()->with('success', 'Mesajınız İletildi');
    }

    public function submitFooterForm(Request $request)
    {


        $request->validate([
            'email' => 'required',
        ], [
           'email.required' => 'E-posta alanı gereklidir.',
        ]);


        $email = $request->input('email');

        Mail::raw(
            'Kullanıcı Maili: ' . $request->email,

            function($message) use($request) {
                $message->from('info@maliyetineev.com', 'Maliyetine Ev');
                $message->to('info@maliyetineev.com');
                $message->subject('Bir Mesajınız Var');
            }
        );




        return redirect()->back()->with('success', 'Mesajınız İletildi');
    }

    public function aydinlatmaMetni(){
        return view('client.aydinlatma_metni');
    }
}
