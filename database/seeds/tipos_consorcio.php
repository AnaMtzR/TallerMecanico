<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipos_consorcio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_consorcio')->insert([

			'nombre' => 'VISA',
			'status' => 1,

		]);

		DB::table('tipos_consorcio')->insert([
			'nombre' => 'MASTER CARD',
			'status' => 1,
		]);

		DB::table('tipos_consorcio')->insert([
			'nombre' => 'AMERICAN EXPRESS',
			'status' => 1,
		]);
    }
}
