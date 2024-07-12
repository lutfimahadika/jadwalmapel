<?php
    namespace App\Http\Controllers;

    use App\Models\Guru;
use App\Models\GuruMapel;
use App\Models\Mapel;
use Illuminate\Http\Request;
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
                $dataMapel = Mapel::select('id', 'mata_pelajaran')->get();
                return view('guru.create', ['dataMapel' => $dataMapel]);

            }

            public function store(Request $request)
            {
                $validator = Validator::make($request->all(), [
                    'no_duk' => 'required|numeric',
                    'guru' => 'required',
                    'beban_mengajar' => 'required|numeric',
                    'mapel' => 'required', // Pastikan memvalidasi input mapel
                ]);

                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                // Simpan data guru baru
                $guru = Guru::create([
                    'no_duk' => $request->no_duk,
                    'nama_guru' => $request->guru,
                    'beban_mengajar' => $request->beban_mengajar,
                ]);

                // Simpan relasi many-to-many antara guru dan mapel
                $guru->mapels()->attach($request->mapel);

                return redirect()->route('admin.index_guru');
            }


            public function edit(Request $request, $id){
                $data = Guru::find($id);
                $dataMapel = Mapel::select('id', 'mata_pelajaran')->get();

                return view('guru.edit',compact('data', 'dataMapel'), ['dataMapel' => $dataMapel]);
            }

            public function update(Request $request, $id)
            {
                $validator = Validator::make($request->all(), [
                    'no_duk' => 'required|numeric',
                    'guru' => 'required',
                    'beban_mengajar' => 'required|numeric',
                    'mapel' => 'required', // Pastikan memvalidasi input mapel
                ]);

                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                $guru = Guru::find($id);

                // Update data guru
                $data = [
                    'no_duk' => $request->no_duk,
                    'nama_guru' => $request->guru,
                    'beban_mengajar' => $request->beban_mengajar,
                ];
                $guru->update($data);

                // Sinkronisasi mata pelajaran yang diajar oleh guru
                $guru->mapels()->sync($request->mapel);

                return redirect()->route('admin.index_guru');
            }


            public function delete(Request $request,$id){
                $data = Guru::find($id);

                if($data){
                    $data->mapels()->detach();
                    $data->delete();
                }

                return redirect()->route('admin.index_guru');
            }
            //user controller end
        }
