<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function dietary(){
        $dietaryData = DB::table('programs')->get()->toArray();
        return view('admin/dietary')->with('dietaryData', $dietaryData)->with('sort', 0);
    }
    public function gym(){
        $gymData = DB::table('gyms')->orderby('name', 'asc')->get()->toArray();
        return view('admin/gym')->with('gymData', $gymData)->with('sort', 0)->with('mode', 0);
    }
}
