<?php

namespace App\Http\Controllers;

use App\Anggota;
use App\hobi;
use Input;
use Redirect;
use Illuminate\Http\Request;

use App\Http\Requests;

class Hobicontroller extends Controller
{
    public function index($id){
    	// return view('hobi.index',compact('anggota.hobi'));
    }
    
    public function create($id){
    	$anggota = Anggota::find($id);
    	return view('hobi.create',compact('anggota'));
    }

    public function store($id){
    	$input = Input::all();
    	$anggota = Anggota::find($id);
    	$input['anggota_id'] = $anggota->id;
    	hobi::create($input);
    	return Redirect::route('anggota.show', $anggota->id);
    }

    public function show($id, $idhobi){
    	$anggota = Anggota::find($id);
    	$hobi = hobi::find($idhobi);
    	return view('hobi.show', compact('anggota','hobi'));
    }

    public function edit($id, $idhobi){
    	$anggota = Anggota::find($id);
    	$hobi = hobi::find($idhobi);
    	$input = array_except(Input::all(), '_method');
    	$hobi->update($input);

    	return Redirect::route('anggota.hobi.show',[$anggota->id, $hobi->id]);
    }

    public function destroy($id, $idhobi){
    	$anggota = Anggota::find($id);
    	$hobi = hobi::find($idhobi);
    	$hobi->delete();

    	return Redirect::route('anggota.show', $anggota->$id);
    }

}
