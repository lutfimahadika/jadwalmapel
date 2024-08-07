<?php
namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use App\Models\GuruMapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


        class GurumapelController extends Controller
        {
            //mapel controller
            public function index_gurumengajar(Request $request){
                $data = GuruMapel::with(['guru', 'mapel']);

                if($request->get('search')){
                    $data = $data->where('nama_guru','LIKE','%'.$request->get('search').'%');
                }
                $data = $data->orderBy('guru_id')->get();
                return view('gurumengajar.index',compact('data','request'));
            }

            public function create(){
                $dataMapel = Mapel::select('id', 'mata_pelajaran')->get();
                $dataGuru = Guru::select('id', 'nama_guru')->get();
                return view('gurumengajar.create', ['dataMapel' => $dataMapel], ['dataGuru' => $dataGuru]);

            }

            public function store(Request $request)
            {
                // Simpan data guru baru
                $data['guru_id'] = $request->input("guru");
                $data['mapel_id'] = $request->input("mapel");

                GuruMapel::create($data);

                return redirect()->route('admin.index_gurumengajar');
            }


            public function edit(Request $request, $id){
                $data = GuruMapel::find($id);

                $dataMapel = Mapel::select('id', 'mata_pelajaran')->get();
                $dataGuru = Guru::select('id', 'nama_guru')->get();

                return view('gurumengajar.edit',compact('data', 'dataMapel', 'dataGuru'));
            }

            public function update(Request $request, $id)
            {
                $find = GuruMapel::find($id);

                $data['mapel_id'] = $request->input("mapel");

                $find->update($data);

                return redirect()->route('admin.index_gurumengajar');
            }


            public function delete(Request $request,$id){

                $data = GuruMapel::find($id);

                if($data){
                    $data->delete();
                }
                return redirect()->route('admin.index_gurumengajar');
            }
            //user controller end
        }
