<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMediaIcon;
use App\Models\Page;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Page::where('slug','iletisim')->first();
        return view('client.contact',compact('contact'));
    }
}
