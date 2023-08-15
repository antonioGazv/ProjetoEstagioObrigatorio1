<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('u_c_s')->insert([
                [
                    'NomeUC' => Str::random(10),
                    'TipoUC' => ['Core', 'Flex'][array_rand([0, 1])],
                    'CargaHoraria' => [15, 30][array_rand([0, 1])],
                    'qtdAlunos' => random_int(50, 70)
                ]
            ]);
        }
    }
}
