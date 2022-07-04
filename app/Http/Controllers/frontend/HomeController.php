<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('frontend.home.home');
    }

    public function about() {
        return view('frontend.about.about');
    }

    public function contact() {
        return view('frontend.contact.contact');
    }
}
