<?php

namespace App\Http\Controllers;

use App\Models\customer;
// use Illuminate\Http\Request;
use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
   
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }
    public function book(Request $request)
    {
        $services=Request::input('services');
        $time=Request::input('time');
        $credit_card_no=Request::input('credit_card_no');

try
    {
$result = DB::insert('insert into bookings(service,time,credit_card) values (?,?,?)', [$services,$time,Hash::make($credit_card_no)]);

    }
    catch (Exception $e){
        return back()->with('error', 'This email has already been Registered')->withInput();
    }

       
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=Request::input('name');
        $email=Request::input('email');
        $phone=Request::input('phone');
        $password=Request::input('password');

        DB::insert('insert into users(name,email,phone,password) values (?,?,?,?)', [$name,$email,$phone,Hash::make($password)]);
        //  $signup = auth()->attempt([

        //     'email' =>$email,
        //     'password' =>$password,

        // ]);
        return redirect('signup');
        // return $request ->all();
// return view('signup');   
 }

 public function login(Request $request){
     $name=Request::input('name');
     $password=Request::input('password');

     $login = auth()->attempt([

        'name' =>$name,
        'password' =>$password,

    ]);

    if($name=='ADMIN' && $password=='ADMIN'){
        return view('admin');
    }
    elseif($login==true){
        return view('home');
    }
    else{
        return redirect('/');
    }
 }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        //
    }
}