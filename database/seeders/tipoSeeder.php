<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipo;

class tipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tipo::create(['id' => '1','tipo' => 'Net']);
        tipo::create(['id' => '2','tipo' => 'Convergente']);
        tipo::create(['id' => '3','tipo' => 'TV']);
        tipo::create(['id' => '4','tipo' => 'Adicional']);
        tipo::create(['id' => '5','tipo' => 'Movil']);

    }
}
