<?php namespace App\Http\Controllers;

use App\Anggota;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;


use Illuminate\Http\Request;

class AnggotaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	public function __construct()
    {
        $this->middleware('auth', ['only' => [
            'create', 'store', 'edit', 'destroy'
        ]]);
    }
	 
	protected $rules = [
		'nama' => ['required', 'min:3'],
		'alamat' => ['required'],
	];
	 
	public function index()
	{
		$anggota = Anggota::all();
		return view('anggota.index', compact('anggota'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('anggota.create');
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
	$this->validate($request, $this->rules);
	$input = Input::all();
	Anggota::create( $input );
	
 	return Redirect::route('anggota.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$anggota = Anggota::find($id);
		return view('anggota.show', compact('anggota'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	 
	public function edit($id)
	{
		$anggota = Anggota::find($id);
		return view('anggota.edit', compact('anggota'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	$anggota = Anggota::find($id);
	$input = array_except(Input::all(), '_method');
	$anggota->update($input);
 
	return Redirect::route('anggota.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	$anggota = Anggota::find($id);
	$anggota->delete();
 
	return Redirect::route('anggota.index');
	}

}
