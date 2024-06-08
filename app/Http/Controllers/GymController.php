<?php

namespace App\Http\Controllers;

use App\Http\Requests\GymRequests;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GymController extends Controller
{
    public function create(){
        return view('admin/gym-cre');
    }

    public function read($id){
        $data = DB::table('gyms')->where('id', $id)->get()->first();
        if(empty($data)){
            return redirect()->back()->with('error', 'Data not found');
        }
        return view('admin/gym-disp')->with('data', $data);
    }

    public function sort(Request $request){
        $sort = $request->input('sort');
        $mode = $request->input('mode');

        switch($sort){
            case(0):{
                $sortf = "name";
                break;
            }
            case(1):{
                $sortf = "loc";
                break;
            }
        }

        switch($mode){
            case(0):{
                $modef = "asc";
                break;
            }
            case(1):{
                $modef = "desc";
                break;
            }
        }
        
        $gymData = DB::table('gyms')->orderBy($sortf, $modef)->get();
        return view('admin/gym')->with('gymData', $gymData)->with('sort', $sort)->with('mode', $mode);
    }

    public function insert(GymRequests $gymRequest){
        try {
            
            $store = $gymRequest->file('img');
            $storeName = time() . '_' . str_replace(" ", "", $store->getClientOriginalName());
            $storeType = $store->getClientOriginalExtension();
            if(!in_array($storeType, ['png', 'jpg', 'jpeg'])){
                return redirect()->back()->withInput()->withErrors(['error' => 'Image must be png, jpg, or jpeg']);
            }

            $store->move(public_path('arch'), $storeName);
            DB::table('gyms')->insert([
                'name' => $gymRequest->input('name'),
                'img' => $storeName,
                'loc' => $gymRequest->input('loc'),
                'map' => $gymRequest->input('map'),
                'desc' => $gymRequest->input('desc')
            ]);
            
            return redirect()->route('admin.gym')->with('success', 'Data inserted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occured when processing the request']);
        }
    }

    public function update(Request $request, $id){
        $rules = [
            'name' => 'required|string|max:255',
            'img' => 'sometimes|nullable|file',
            'loc' => 'required|string',
            'map' => 'required|string',
            'desc' => 'required|string'
        ];

        $validator = Validator::make($request->all(), $rules);
        
        
        if ($validator->fails()) {
            return back()->with('error', 'All fields must be filled')->withInput();
        }
        $data = $request->all();
        try{
            if(empty($data['img'])){
                $storeName = DB::table('gyms')->where('id', $id)->value('img');
            }
            else{
                $store = $dietaryRequest->file('img');
                $storeName = time() . '_' . str_replace(" ", "", $store->getClientOriginalName());
                $storeType = $store->getClientOriginalExtension();
                if(!in_array($storeType, ['png', 'jpg', 'jpeg'])){
                    return redirect()->back()->withInput()->with('error', 'Image must be png, jpg, or jpeg');
                }
            }

            $confirm = DB::table('gyms')->where('id', $id)->update([
                'name' => $data['name'],
                'img' => $storeName,
                'loc' => $data['loc'],
                'map' => $data['map'],
                'desc' => $data['desc']
            ]);

            if($confirm > 0){
                return redirect()->route('admin.gym')->with('success', 'Data modified successfully');
            }
            else{
                return redirect()->back()->withInput()->with('error', 'Update Failed');
            }

        }catch(\Exception $e){
            return redirect()->back()->withInput()->with('error', 'An error occured when processing the request');
        }
    }

    public function conf($id){
        $data = DB::table('gyms')->where('id', $id)->get()->first();
        if(empty($data)){
            return redirect()->back()->with('error', 'Data not found');
        }
        return view('admin/gym-conf')->with('data', $data);
    }

    public function deletef(Request $request, $id){
        DB::table('gyms')
            ->where('id', $id)
            ->delete();
        return redirect()->route('admin.gym')->with('success', 'Data successfully deleted');
    }
}
