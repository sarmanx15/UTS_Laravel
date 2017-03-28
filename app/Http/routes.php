<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/cobamodel', function () {
// 	$anggota = App\anggota::all()->first();
//     echo $anggota->nama;
//     echo ' ';
//     echo $anggota->alamat;
// });

// Route::get('/cobamodel2', function () {
// 	$anggota = App\anggota::where('nama', '=', 'Arif Fahrizal')->first();
//     echo $anggota->id.' ';
//     // echo ' ';
//     echo $anggota->nama;
// });

// Route::get('/cobamodel3', function () {
// 	$anggota = App\anggota::all();
// 	foreach ($anggota as $list) {
// 	    echo $list->nama;
// 	    echo ' ';
// 	    echo $list->alamat;
// 	    echo '<br>';
// 	}
// });

// Route::get('/cobamodel4', function () {
// 	$anggota = new App\anggota;
// 	$anggota-> nama = 'Ferry';
// 	$anggota-> alamat = 'Jl. Pramuka 19';
// 	$anggota-> save();

// 	echo "Data anggota {$anggota->nama} berhasil disimpan";
// });

// Route::get('/editcobamodel4', function () {
// 	$anggota = App\anggota::find(5);
// 	$anggota-> nama = 'Ferry Miechel l';
// 	$anggota-> alamat = 'Jl. Pramuka 19';
// 	$anggota-> save();

// 	echo "Data anggota {$anggota->nama} berhasil disimpan";
// });

// Route::get('/cobamodel5', function () {
// 	$anggota = App\anggota::find(2);
// 	$anggota->delete();

// 	echo "Data anggota berhasil dihapus";
// });

// Route::get('/relasi', function () {
// 	$anggota = App\anggota::where('nama', '=','Muh. Sarman')->first();
// 	echo $anggota->nama.' '.' Hobinya :';
// 	#tampilkan seluruh data hobinya

// 	foreach ($anggota->hobi as $list)
// 		echo '<li>'.$list->hobi;
// });



Route::get('/', 'AnggotaController@index');
Route::get('home', 'AnggotaController@index');
// Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::auth();


Route::resource('anggota','AnggotaController');
Route::resource('anggota.hobi','Hobicontroller');

Route::get('post','postcontroller@index');
