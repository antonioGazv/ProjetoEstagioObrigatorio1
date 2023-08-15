<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('sala_de_aulas')->insert([
                [
                    'NomeSala' => "Lab " . $i+1,
                    'Capacidade' => random_int(60, 100),
                    'Categoria' => Str::random(10),
                    'Disponivel' => ['Ocupado', 'Disponível'][array_rand([0, 1])]
                ]
            ]);
        }
    }
}
