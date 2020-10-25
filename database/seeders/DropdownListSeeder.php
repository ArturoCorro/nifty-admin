<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DropdownListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents(__DIR__ . '/DropdownList-estado-municipio.sql'));
        DB::unprepared(file_get_contents(__DIR__ . '/DropdownList-titulo_personal.sql'));
        DB::unprepared(file_get_contents(__DIR__ . '/DropdownList-presentacion_producto.sql'));
        DB::unprepared(file_get_contents(__DIR__ . '/DropdownList-unidad_de_uso.sql'));
    }
}
