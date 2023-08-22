<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function blog()
    {
        $user = Auth::user();
        return view('blog', ['user' => $user]);
    }
}
