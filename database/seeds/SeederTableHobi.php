<?php

use Illuminate\Database\Seeder;

class SeederTableHobi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('hobi')->delete();

        //membuat data berupa array untuk diinput ke database
        $hobi = array(
        	array('hobi' => 'Traveling', 'anggota_id'=> '1'),
        	array('hobi' => 'Memancing', 'anggota_id'=> '3'),
        	array('hobi' => 'Menggambar', 'anggota_id'=> '4')
        	);
        DB::table('hobi')->insert($hobi);
    }
}
