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

        // set session
        //  $request->session()->put(['bob'=>'master bob']);

        // set global session (no need for request)
        //  session(['bob2'=>'hobnob']);

        //get session
        // echo $request->session()->get('bob');
        // return session('bob2');

        // delete session
        // return $request->session()->all();
        // $request->session()->forget('bob');
        //  $request->session()->flush();
        


        // Flashing data, temporary

        // $request->session()->flash('message','post has been created');

        // return session()->get('message');

        // retains data longer
        // $request->session()->reflash();

        // keeps flash data
        // $request->session()->keep('message');

        // return view('home');
    }
}
