<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Champion;

class ChampionSeeder extends Seeder
{
    public function run(): void
    {
        Champion::insert([
            [
                'nombre' => 'Zed',
                'rol' => 'Asesino',
                'linea' => 'Mid'
            ],
            [
                'nombre' => 'Lux',
                'rol' => 'Mago',
                'linea' => 'Mid'
            ],
            [
                'nombre' => 'Garen',
                'rol' => 'Tanque',
                'linea' => 'Top'
            ],
            [
                'nombre' => 'Darius',
                'rol' => 'Peleador',
                'linea' => 'Top'
            ],
            [
                'nombre' => 'Jinx',
                'rol' => 'Tirador',
                'linea' => 'Bot'
            ],
            [
                'nombre' => 'Thresh',
                'rol' => 'Soporte',
                'linea' => 'Bot'
            ],
            [
                'nombre' => 'Lee Sin',
                'rol' => 'Peleador',
                'linea' => 'Jungla'
            ],
            [
                'nombre' => 'Ahri',
                'rol' => 'Mago',
                'linea' => 'Mid'
            ],
            [
                'nombre' => 'Katarina',
                'rol' => 'Asesino',
                'linea' => 'Mid'
            ],
            [
                'nombre' => 'Soraka',
                'rol' => 'Soporte',
                'linea' => 'Bot'
            ]
        ]);
    }
    }
