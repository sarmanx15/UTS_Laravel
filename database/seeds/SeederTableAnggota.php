<?php

use Illuminate\Database\Seeder;

class SeederTableAnggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// mengosongkan table anggota
        DB::table('anggota')->delete();

        //membuat data berupa array untuk diinput ke database
        $anggota = array(
        	array('id' => 1, 'nama'=> 'Muh. Sarman','alamat'=> 'Jalan AW Syahranie Gang 54'),
        	array('id' => 2, 'nama'=> 'Fadilla ivan','alamat'=> 'Jalan AW Syahranie Gang 53'),
        	array('id' => 3, 'nama'=> 'Taufik Khosyi','alamat'=> 'Jalan AW Syahranie Gang 53'),
        	array('id' => 4, 'nama'=> 'Arif Fahrizal','alamat'=> 'Jalan Pramuka 6')
        	);
        DB::table('anggota')->insert($anggota);
    }
}
