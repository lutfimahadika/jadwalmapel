<?php
namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


        class GuruController extends Controller
        {
            //mapel controller
            public function index_guru(Request $request){
                $data =  new Guru();

                if($request->get('search')){
                    $data = $data->where('nama_guru','LIKE','%'.$request->get('search').'%');
                }

                $data = $data->get();
                return view('guru.index',compact('data','request'));
            }

            public function create(){
                return view('guru.create');

            }

            public function store(Request $request)
            {
                $validator = Validator::make($request->all(), [
                    'no_duk' => 'required|numeric',
                    'guru' => 'required',
                    'beban_mengajar' => 'required|numeric',
                ]);

                if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

                // Simpan data guru baru
                $data['no_duk'] = $request->no_duk;
                $data['nama_guru'] = $request->guru;
                $data['beban_mengajar'] = $request->beban_mengajar;

                Guru::create($data);

                return redirect()->route('admin.index_guru');
            }


            public function edit(Request $request, $id){
                $data = Guru::find($id);

                return view('guru.edit',compact('data'));
            }

            public function update(Request $request, $id)
            {
                $validator = Validator::make($request->all(), [
                    'no_duk' => 'required|numeric',
                    'guru' => 'required',
                    'beban_mengajar' => 'required|numeric',
                ]);

                if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

                $find = Guru::find($id);

                $data['no_duk'] = $request->no_duk;
                $data['nama_guru'] = $request->guru;
                $data['beban_mengajar'] = $request->beban_mengajar;

                $find->update($data);

                return redirect()->route('admin.index_guru');
            }


            public function delete(Request $request,$id){
                $data = Guru::find($id);

                if($data){
                    $data->delete();
                }
                return redirect()->route('admin.index_guru');
            }
            //user controller end
        }
