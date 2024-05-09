<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'terms_condition' => 'required',
        ]);


        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');

        Mail::raw(
            'Mesajı Gönderen: ' . $request->name . "\n" .
            'Kullanıcı Maili: ' . $request->email . "\n" .
            'Kullanıcı Telefonu: ' . $request->phone,

            function($message) use($request) {
                $message->from('info@maliyetineev.com', 'Maliyetine Ev');
                $message->to('info@maliyetineev.com');
                $message->subject('Bir Mesajınız Var');
            }
        );




        return redirect()->back()->with('success', 'Mesajınız İletildi');
    }


    public function submitContactForm(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'job' => 'required',
            'message' => 'required',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $job = $request->input('job');
        $message = $request->input('message');

        Mail::raw(
            'Mesajı Gönderen: ' . $request->name . "\n" .
            'Kullanıcı Maili: ' . $request->email . "\n" .
            'Kullanıcı Telefonu: ' . $request->phone. "\n" .
            'Kullanıcı Mesleği: ' . $request->job . "\n" .
            'Kullanıcı Mesajı: ' . $request->message,

            function($message) use($request) {
                $message->from('info@maliyetineev.com', 'Maliyetine Ev');
                $message->to('info@maliyetineev.com');
                $message->subject('Bir Mesajınız Var');
            }
        );




        return redirect()->back()->with('success', 'Mesajınız İletildi');
    }

    public function submitFooterForm(Request $request)
    {


        $request->validate([
            'email' => 'required',
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
}