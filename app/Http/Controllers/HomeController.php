<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    // public function __construct() {
    //   $this->middleware(['permission:view_dashboard']);

    // }

    //dashboard
    public function dashboard(){

        $data = [
            'guru' => Guru::count(),
            'kelas' => Kelas::count(),
            'mapel' => Mapel::count()
        ];

        return view('dashboard', $data);

        // return abort(403);
    }
    //end dashboard


    //user controller
    public function index(Request $request){
        $data =  new User;

        if($request->get('search')){
            $data = $data->where('name','LIKE','%'.$request->get('search').'%')
            ->orWhere('email','LIKE','%'.$request->get('search').'%');
        }

        $data = $data->get();
        return view('index',compact('data','request'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'nama' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email'] = $request->email;
        $data['name'] = $request->nama;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('admin.index');
    }

    public function edit(Request $request,$id){
        $data = User::find($id);

        return view('edit',compact('data'));
    }

    public function detail(Request $request,$id){
        $data = User::find($id);

        return view('detail',compact('data'));
    }

    public function update(Request $request,$id){

        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'nama' => 'required',
            'password' => 'nullable',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $find = User::find($id);

        $data['email'] = $request->email;
        $data['name'] = $request->nama;

        if($request->password){
            $data['password'] = Hash::make($request->password);
        }

        $find->update($data);

        return redirect()->route('admin.index');
    }

    public function delete(Request $request,$id){
        $data = User::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.index');
    }
    //user controller end
}
