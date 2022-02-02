<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libros')->insert([
            'nombre'=>'libro 1',
            'autor' => 'Juanito perez',
            'numero_paginas'=> '200'
        ]);
        DB::table('libros')->insert([
            'nombre'=>'libro 2',
            'autor' => 'Luis martinez',
            'numero_paginas'=> '500'
        ]);
        DB::table('libros')->insert([
            'nombre'=>'libro 3',
            'autor' => 'Carlos valle',
            'numero_paginas'=> '700'
        ]);
        DB::table('libros')->insert([
            'nombre'=>'libro 4',
            'autor' => 'Maria martinez',
            'numero_paginas'=> '1000'
        ]);
        DB::table('libros')->insert([
            'nombre'=>'libro 5',
            'autor' => 'Laura figueroa',
            'numero_paginas'=> '100'
        ]);
    }
}
