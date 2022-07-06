<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    // For Logout Function
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
