<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MapelController extends Controller
{
    //mapel controller
    public function index_mapel(Request $request){
        $data =  new Mapel();

        if($request->get('search')){
            $data = $data->where('mata_pelajaran','LIKE','%'.$request->get('search').'%');
        }

        $data = $data->get();
        return view('mapel.index',compact('data','request'));
    }

    public function create(){
        return view('mapel.create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'mapel' => 'required',
            'jp' => 'required|numeric',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['mata_pelajaran'] = $request->mapel;
        $data['jp'] = $request->jp;
        $data['tingkat'] = $request->tingkat;
        $data['jurusan'] = $request->jurusan;

        Mapel::create($data);

        return redirect()->route('admin.index_mapel');
    }

    public function edit(Request $request,$id){
        $data = Mapel::find($id);

        return view('mapel.edit',compact('data'));
    }

    public function update(Request $request,$id){

        $validator = Validator::make($request->all(),[
            'mapel' => 'required',
            'jp' => 'required|numeric',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $find = Mapel::find($id);

        $data['mata_pelajaran'] = $request->mapel;
        $data['jp'] = $request->jp;
        $data['tingkat'] = $request->tingkat;
        $data['jurusan'] = $request->jurusan;

        $find->update($data);

        return redirect()->route('admin.index_mapel');
    }

    public function delete(Request $request,$id){
        $data = Mapel::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.index_mapel');
    }
    //user controller end
}
