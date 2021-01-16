<?php

use Illuminate\Database\Seeder;

class tipos_servicios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TODO: Falta agregar el catálogo de los servicios que se ofrecerán.
        

        DB::table('tipos_servicios')->insert([
    	'nombre' =>'Cambio de Aceite',
 		'descripcion' =>'Cambio de aceite.',
 		'precio' =>700,
		'status' =>1,
    	]);

        DB::table('tipos_servicios')->insert([
            'nombre' => 'Cambio de Llantas',
            'descripcion' =>'Cambio de de Llantas.',
	 		'precio' =>700,
			'status' =>1,
        ]);

        DB::table('tipos_servicios')->insert([
            'nombre' => 'Alineación y balanceo ',
           'descripcion' =>'Alineación y balanceo ',
	 		'precio' =>700,
			'status' =>1,
        ]);

        DB::table('tipos_servicios')->insert([
            'nombre' => 'Cambio de baterías',
            'descripcion' =>'Cambio de baterías.',
	 		'precio' =>700,
			'status' =>1,
        ]);

    }
}
