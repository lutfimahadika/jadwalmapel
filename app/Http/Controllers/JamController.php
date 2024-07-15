<?php

namespace App\Http\Controllers;

use App\Models\Jam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class JamController extends Controller
{
    //kelas controller
    public function index_jam(Request $request){
        $data =  new Jam();

        if($request->get('search')){
            $data = $data->where('id','LIKE','%'.$request->get('search').'%');
        }

        $data = $data->get();
        return view('jam.index',compact('data','request'));
    }

    public function create(){
        return view('jam.create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'jam_awal' => 'required',
            'jam_akhir' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['jam_awal'] = $request->jam_awal;
        $data['jam_akhir'] = $request->jam_akhir;

        Jam::create($data);

        return redirect()->route('admin.index_jam');
    }

    public function edit(Request $request,$id){
        $data = Jam::find($id);

        return view('jam.edit',compact('data'));
    }

    public function update(Request $request,$id){

        $validator = Validator::make($request->all(),[
            'jam_awal' => 'required',
            'jam_akhir' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $find = Jam::find($id);

        $data['jam_awal'] = $request->jam_awal;
        $data['jam_akhir'] = $request->jam_akhir;

        $find->update($data);

        return redirect()->route('admin.index_jam');
    }

    public function delete(Request $request,$id){
        $data = Jam::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.index_jam');
    }
    //user controller end
}
