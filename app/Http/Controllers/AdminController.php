<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function dietary(){
        $dietaryData = DB::table('programs')->get()->toArray();
        return view('admin/dietary')->with('dietaryData', $dietaryData);
    }
    public function gym(){
        return view('admin/gym');
    }
}
