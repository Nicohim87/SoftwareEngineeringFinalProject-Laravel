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
    
    public function read($id){
        $data = DB::table('programs')->where('id', $id)->get()->first();
        if(empty($data)){
            return redirect()->back()->with('error', 'Data not found');
        }
        return view('admin/dietary-disp')->with('data', $data);
    }

    public function sort(Request $request){
        $sort = $request->input('sort');
        if($sort == 0){
            return redirect()->route('admin.dietary');
        }
        
        $dietaryData = DB::table('programs')->where('type', $sort)->get();
        return view('admin/dietary')->with('dietaryData', $dietaryData)->with('sort', $sort);
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
    public function update(Request $request, $id){
        $rules = [
            'name' => 'required|string|max:255',
            'img' => 'sometimes|nullable|file',
            'type' => 'required|integer',
            'desc' => 'required|string'
        ];

        $validator = Validator::make($request->all(), $rules);
        
        
        if ($validator->fails()) {
            return back()->with('error', 'All fields must be filled')->withInput();
        }
        $data = $request->all();
        try{
            if(empty($data['img'])){
                $storeName = DB::table('programs')->where('id', $id)->value('img');
            }
            else{
                $store = $dietaryRequest->file('img');
                $storeName = time() . '_' . str_replace(" ", "", $store->getClientOriginalName());
                $storeType = $store->getClientOriginalExtension();
                if(!in_array($storeType, ['png', 'jpg', 'jpeg'])){
                    return redirect()->back()->withInput()->with('error', 'Image must be png, jpg, or jpeg');
                }
            }

            $confirm = DB::table('programs')->where('id', $id)->update([
                'name' => $data['name'],
                'img' => $storeName,
                'type' => $data['type'],
                'desc' => $data['desc']
            ]);

            if($confirm > 0){
                return redirect()->route('admin.dietary')->with('success', 'Data modified successfully');
            }
            else{
                return redirect()->back()->withInput()->with('error', 'Update Failed');
            }

        }catch(\Exception $e){
            return redirect()->back()->withInput()->with('error', 'An error occured when processing the request');
        }
    }

    public function conf($id){
        $data = DB::table('programs')->where('id', $id)->get()->first();
        if(empty($data)){
            return redirect()->back()->with('error', 'Data not found');
        }
        return view('admin/dietary-conf')->with('data', $data);
    }

    public function deletef(Request $request, $id){

        DB::table('programs')
            ->where('id', $id)
            ->delete();
        return redirect()->route('admin.dietary')->with('success', 'Data successfully deleted');
    }
}
