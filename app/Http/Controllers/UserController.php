<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function home(){
        return view('user.home');
    }
    public function dietary(){
        return view('user.dietary');
    }
    public function gym(){
        $data = DB::table('gyms')->get();
        return view('user.gym')->with('data', $data);
    }
    public function bmi(){
        return view('user.bmi');
    }

    public function dview($id){
        $data = DB::table('programs')->where('id', $id)->first();
        return view('user.dietary-view')->with('data', $data);
    }

    public function bulking(){
        $data = DB::table('programs')->where('type', 1)->get();
        return view('user.dietary-bulking')->with('data', $data);
    }
    public function cutting(){
        $data = DB::table('programs')->where('type', 2)->get();
        return view('user.dietary-cutting')->with('data', $data);
    }
    public function diet(){
        $data = DB::table('programs')->where('type', 3)->get();
        return view('user.dietary-diet')->with('data', $data);
    }
    public function maintenance(){
        $data = DB::table('programs')->where('type', 4)->get();
        return view('user.dietary-maintenance')->with('data', $data);
    }
}
