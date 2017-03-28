<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\anggota;
use Input;
use Redirect;
use App\Http\Controllers\Controller;

class Anggotacontroller extends Controller
{
	// public function __construct()
 //    {
 //        $this->middleware('auth', ['only' => [
 //            'create', 'store', 'edit', 'destroy'
 //        ]]);
 //    }
	 
	// protected $rules = [
	// 	'nama' => ['required', 'min:3'],
	// 	'alamat' => ['required'],
	// ];



 
    public function index(){
    $anggota = anggota::all();
    return view('anggota.index',['data'=>anggota::all()]);

}

public function create(){
	return view('anggota.create');
}

public function store(Requests $Requests){
	$input = input::all();
	Anggota::create($input);
	return Redirect::route('anggota.index');
}

public function show($id){
	$anggota = Anggota::find($id);
	return view('anggota.show', compact('anggota'));
}

public function edit($id){
	$anggota = Anggota::find($id);
	return view('anggota.edit', compact('anggota'));
}

public function update($id){
	$anggota = Anggota::find($id);
	$input = array_except(Input::all(), '_method');
	$anggota->update($input);
	return Redirect::route('anggota.index');
}

public function destroy($id){
	$anggota = Anggota::find($id);
	$anggota->delete();
	return Redirect::route('anggota.index');
}
//==============================================================================
// public function awal()
//     {
//     	return view('pengguna.awal',['data'=>pengguna::all()]);
//     }

//     public function tambah()
//     {
//     	return view('pengguna.tambah');
//     }
//     public function simpan(Request $input)
//     {
//     	$pengguna = new pengguna;
//     	$pengguna->username = $input->username;
//     	$pengguna->password = $input->password;
//         $informasi = $pengguna->save() ? 'Berhasil simpan data': 'gagal simpan data';
//         return redirect('pengguna')->with(['informasi'=>$informasi]);
    
//     }
//     public function edit($id){
//         $pengguna = pengguna::find($id);
//         return view('pengguna.edit')->with(array('pengguna'=>$pengguna));
//     }


//     public function lihat($id){
//         $pengguna = pengguna::find($id);
//         return view('pengguna.lihat')->with(array('pengguna'=>$pengguna));
//     }

//     public function update(Request $input, $id){
//         $pengguna = pengguna::find($id);
//         $pengguna->username = $input->username;
//         $pengguna->password = $input->password;
//         $informasi = $pengguna->save() ? 'Berhasil update data': 'Gagal Update data';
//         return redirect('pengguna')->with(['informasi'=>$informasi]);

//     }
//     public function hapus($id){
//         $pengguna = pengguna::find($id);
//         $informasi = $pengguna->delete() ? 'Berhasil hapus data':'Gagal hapus data';
//         return redirect('pengguna')->with(['informasi'=>$informasi]);
//     }
}