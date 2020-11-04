<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipos_banco extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_banco')->insert([
            'nombre' => 'BANCO DE MÉXICO',
            'status' => 1,
        ]);


        DB::table('tipos_banco')->insert([
            'nombre' => 'BBVA',
            'status' => 1,
        ]);

        DB::table('tipos_banco')->insert([
            'nombre' => 'BANCOMER',
            'status' => 1,
        ]);

        DB::table('tipos_banco')->insert([
            'nombre' => 'BANAMEX',
            'status' => 1,
        ]);


        DB::table('tipos_banco')->insert([

            'nombre' => 'HSBC',
            'status' => 1,

        ]);

        DB::table('tipos_banco')->insert([
            'nombre' => 'SCOTIABANK',
            'status' => 1,
        ]);

        DB::table('tipos_banco')->insert([
            'nombre' => 'SANTANDER',
            'status' => 1,
        ]);


        DB::table('tipos_banco')->insert([

            'nombre' => 'BANORTE',
            'status' => 1,

        ]);

        DB::table('tipos_banco')->insert([
            'nombre' => 'INBURSA',
            'status' => 1,
        ]);
    }
}
