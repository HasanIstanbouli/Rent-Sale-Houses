<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;
use App\House;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function show(){
        $user_id =auth()->user()->id ;
        $user = User::find($user_id);
//        $user = User::find($user_id)->paginate(6); this doesn't work
        $uu = $user->houses()->paginate(6); //this way works in case we like to use Eloquent and Model relations
        return view('my_houses')->with('houses',$uu) ;
}

}
