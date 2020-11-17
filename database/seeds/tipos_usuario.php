<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipos_usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_usuario')->insert([
            'nombre' => 'ADMIN',
            'status' => 1,
        ]);


        DB::table('tipos_usuario')->insert([

            'nombre' => 'RECEPCIONISTA',
            'status' => 1,

        ]);

        DB::table('tipos_usuario')->insert([
            'nombre' => 'CLIENTE',
            'status' => 1,
        ]);
    }
}
