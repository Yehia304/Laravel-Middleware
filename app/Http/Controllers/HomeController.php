<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
       // $request->session()->put(['Yehia'=>'Perfect']);

        session(['Merna'=>'Perfect1']);
        session()->forget('Merna');

        session()->flash('Message','HaHa');

     return $request->session()->all();

        //return view('home');
    }
}
