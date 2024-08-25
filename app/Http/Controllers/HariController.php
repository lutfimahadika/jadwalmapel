<?php

namespace App\Http\Controllers;

use App\Models\Hari;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HariController extends Controller
{
    public function index_hari(Request $request){
        $data =  new Hari();

        if($request->get('search')){
            $data = $data->where('nama_hari','LIKE','%'.$request->get('search').'%');
        }

        $data = $data->get();
        return view('hari.index',compact('data','request'));
    }

    public function create(){
        return view('hari.create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'nama_hari' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nama_hari'] = $request->nama_hari;


        Hari::create($data);

        return redirect()->route('admin.index_hari');
    }

    public function edit(Request $request,$id){
        $data = Hari::find($id);

        return view('hari.edit',compact('data'));
    }

    public function update(Request $request,$id){

        $validator = Validator::make($request->all(),[
            'nama_hari' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $find = Hari::find($id);

        $data['nama_hari'] = $request->nama_hari;

        $find->update($data);

        return redirect()->route('admin.index_hari');
    }

    public function delete(Request $request,$id){
        $data = Hari::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.index_hari');
    }
    //kelas controller end
}
