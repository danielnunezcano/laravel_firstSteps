<?php

use App\Usuario;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('usuarios')->insert(['nombre' => 'Miguel Muñoz Martínez','direccion' => 'Calle San Nicolás','cp' => '30005','email' => 'mke_mar72@ono.com','rol' => 'comprador','contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b','fk_ciudades' => '661']);
        DB::table('usuarios')->insert(['nombre' => 'Francisco Rubio Blancas','direccion' => 'Alfara del Patriarca','cp' => '46025','email' => 'framer@gmail.com','rol' => 'comprador','contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b']);
        DB::table('usuarios')->insert(['nombre' => 'Rebeca Soler Sanchis','direccion' => 'Calle de fuenlabrada','cp' => '28019','email' => 'rebsan19@hotmail.com','rol' => 'comprador','contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b']);
        DB::table('usuarios')->insert(['nombre' => 'Merce Roig Navarro','direccion' => 'Calle Santa Eulalia','cp' => '8012','email' => 'merce76@yahoo.es','rol' => 'comprador','contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b']);
        DB::table('usuarios')->insert(['nombre' => 'Silvia Villacampa Martín','direccion' => 'Calle del Coso','cp' => '50004','email' => 'silvia_villacampa@gmail.com','rol' => 'comprador','contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b']);
        DB::table('usuarios')->insert(['nombre' => 'Patricia Lorca Cantó','direccion' => 'Avenida de Andalucia ','cp' => '3804','email' => 'patdomar@ono.com','rol' => 'comprador','contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b']);
        DB::table('usuarios')->insert(['nombre' => 'Manuel Hernandez Molina','direccion' => 'Calle de Hernan Cortés','cp' => '2005','email' => 'manu72@hotmail.com','rol' => 'comprador','contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b']);
        DB::table('usuarios')->insert(['nombre' => 'Pablo Sanchez García','direccion' => 'Calle de Santander','cp' => '9004','email' => 'mnar_der@yahoo.es','rol' => 'comprador','contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b']);
        DB::table('usuarios')->insert(['nombre' => 'Carlos López Blanes','direccion' => 'Avenida de Jaime I','cp' => '12560','email' => 'lets@ozu.es','rol' => 'comprador','contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b']);
        DB::table('usuarios')->insert(['nombre' => 'Vanesa Romero Gonzalez','direccion' => 'Paseo de la Estación','cp' => '23150','email' => 'vaner_gon@gmail.com','rol' => 'comprador','contrasenya' => '7c4a8d09ca3762af61e59520943dc26494f8941b']);
        DB::table('usuarios')->insert(['nombre' => 'Administrador','direccion' => 'C/ Administracion','cp' => '12345','email' => 'admin@admin.com','rol' => 'administrador','contrasenya' => 'd033e22ae348aeb5660fc2140aec35850c4da997']);
    }
}
