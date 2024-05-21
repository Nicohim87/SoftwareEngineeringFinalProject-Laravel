<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class auth extends Controller
{
    public function getPass(Request $request, string $username)
    {
        $results = DB::table('admins')
            ->where('username', 'LIKE', $username)
            ->get();

        return response()->json($results);
    }
}
