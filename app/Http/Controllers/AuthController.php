<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AuthRequest;
use App\Models\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class AuthController extends Controller
{
    public function index(){
        return view('admin/auth');
    }

    public function login(AuthRequest $request){
        $validated = $request->validated();

        $data = Admin::where('name', $validated['name'])->first();

        if($data == NULL){
            return redirect()->back()->with('error', 'Name not found');
        }


        if(Auth::attempt($validated)){
            session()->regenerate();
            return redirect()->route('admin.dietary');
        }
        else{
            return redirect()->back()->with('error', 'Wrong Password');
        }

    }

    public function logout(Request $request){
        Auth::logout(); 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
