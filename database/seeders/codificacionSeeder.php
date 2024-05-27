<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Codificacion;

class codificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        codificacion::create(['id' => '1','codificacion' => 'Retenido']);
        codificacion::create(['id' => '2','codificacion' => 'No retenido - Precio']);
        codificacion::create(['id' => '3','codificacion' => 'No retenido - Cobertura']);
        codificacion::create(['id' => '4','codificacion' => 'No retenido - Compromiso']);
        codificacion::create(['id' => '5','codificacion' => 'No retenido - Averias']);

    }
}
