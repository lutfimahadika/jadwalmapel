<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KelasController extends Controller
{
    //kelas controller
    public function index_kelas(Request $request){
        $data =  new Kelas();

        if($request->get('search')){
            $data = $data->where('nama_kelas','LIKE','%'.$request->get('search').'%');
        }

        $data = $data->get();
        return view('kelas.index',compact('data','request'));
    }

    public function create(){
        return view('kelas.create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'nama_kelas' => 'required',
            'tingkat' => 'required|numeric',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nama_kelas'] = $request->nama_kelas;
        $data['tingkat'] = $request->tingkat;
        $data['jurusan'] = $request->jurusan;

        Kelas::create($data);

        return redirect()->route('admin.index_kelas');
    }

    public function edit(Request $request,$id){
        $data = Kelas::find($id);

        return view('kelas.edit',compact('data'));
    }

    public function update(Request $request,$id){

        $validator = Validator::make($request->all(),[
            'nama_kelas' => 'required',
            'tingkat' => 'required|numeric',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $find = Kelas::find($id);

        $data['nama_kelas'] = $request->nama_kelas;
        $data['tingkat'] = $request->tingkat;
        $data['jurusan'] = $request->jurusan;

        $find->update($data);

        return redirect()->route('admin.index_kelas');
    }

    public function delete(Request $request,$id){
        $data = Kelas::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.index');
    }
    //user controller end
}
