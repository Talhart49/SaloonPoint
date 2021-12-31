<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        $id = auth()->user()->id;
        $bookings = DB::select("select * from bookings where user_id = ?", [$id]);
        $name = auth()->user()->name;
        return view('profile', ['bookings' => $bookings,'name' => $name]);
    }
    public function admin(){
        return view('admin');
    }
    public function editP(){
        return view('editP');
    }
    public function deleteBooking(){
        $id = request('booking_id');
        DB::delete('delete from bookings where booking_id = ?', [$id]);
        return redirect('profile');
    }
}