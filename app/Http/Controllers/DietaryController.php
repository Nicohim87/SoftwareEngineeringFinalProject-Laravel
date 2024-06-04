<?php

namespace App\Http\Controllers;

use App\Http\Requests\DietaryRequest;
use App\Models\Program;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DietaryController extends Controller
{   
    public function create(){
        return view('admin/dietary-cre');
    }
    public function read(){
        return view('admin/dietary-disp');  
    }
    public function insert(DietaryRequest $dietaryRequest){
        try {
            
            $store = $dietaryRequest->file('img');
            $storeName = time() . '_' . str_replace(" ", "", $store->getClientOriginalName());
            $storeType = $store->getClientOriginalExtension();
            if(!in_array($storeType, ['png', 'jpg', 'jpeg'])){
                return redirect()->back()->withInput()->withErrors(['error' => 'Image must be png, jpg, or jpeg']);
            }
            
            $store->move(public_path('arch'), $storeName);
            DB::table('programs')->insert([
                'name' => $dietaryRequest->input('name'),
                'img' => $storeName,
                'type' => $dietaryRequest->input('type'),
                'desc' => $dietaryRequest->input('desc')
            ]);
            
            return redirect()->route('admin.dietary')->with('success', 'Data inserted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occured when processing the request']);
        }
    }
}
