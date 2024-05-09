<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMediaIcon;

class ContactController extends Controller
{
    public function index()
    {


        return view('client.contact');
    }
}
