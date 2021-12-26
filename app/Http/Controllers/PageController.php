<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(){
        return view('login');
    }
    public function signup(){
        return view('signup');
    }
    public function home(){
        return view('home');
    }
    public function booking(){
        return view('booking');
    }
    public function profile(){
        return view('profile');
    }
    public function admin(){
        return view('admin');
    }
    public function editP(){
        return view('editP');
    }
}