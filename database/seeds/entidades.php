<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class entidades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $varEntidades[1] = 'Aguascalientes';
		$varEntidades[2] = 'Baja California';
		$varEntidades[3] = 'Baja California Sur';
		$varEntidades[4] = 'Campeche';
		$varEntidades[5] = 'Coahuila de Zaragoza';
		$varEntidades[6] = 'Colima';
		$varEntidades[7] = 'Chiapas';
		$varEntidades[8] = 'Chihuahua';
		$varEntidades[9] = 'Ciudad de México';
		$varEntidades[10] = 'Durango';
		$varEntidades[11] = 'Guanajuato';
		$varEntidades[12] = 'Guerrero';
		$varEntidades[13] = 'Hidalgo';
		$varEntidades[14] = 'Jalisco';
		$varEntidades[15] = 'México';
		$varEntidades[16] = 'Michoacán';
		$varEntidades[17] = 'Morelos';
		$varEntidades[18] = 'Nayarit';
		$varEntidades[19] = 'Nuevo León';
		$varEntidades[20] = 'Oaxaca';
		$varEntidades[21] = 'Puebla';
		$varEntidades[22] = 'Querétaro';
		$varEntidades[23] = 'Quintana Roo';
		$varEntidades[24] = 'San Luis Potosí';
		$varEntidades[25] = 'Sinaloa';
		$varEntidades[26] = 'Sonora';
		$varEntidades[27] = 'Tabasco';
		$varEntidades[28] = 'Tamaulipas';
		$varEntidades[29] = 'Tlaxcala';
		$varEntidades[30] = 'Veracuz';
		$varEntidades[31] = 'Yucatán';
        $varEntidades[32] = 'Zacatecas';
        
        for($i = 1; $i <= 32; $i++)
        {
            DB::table('entidades')->insert([
				'nombre' => $varEntidades[$i],
				'status' => 1,
			]);
        }
    }
}
