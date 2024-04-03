<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Models\Profile as prt;

class MainController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function ProfilePage($username){
        $data = prt::where('user', $username)->first();
       // $data = DB::table('profile')->where('user',$username)->first();
        return view('profile')->with('data',$data);
    }

    public function HomePage(){
        $data = DB::table('profiles')->get();
        return view('home')->with('data',$data);
    }
}
