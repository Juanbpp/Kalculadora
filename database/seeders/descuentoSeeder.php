<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Descuento;

class descuentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        descuento::create(['id' => '1','tipo' => 'entero','descuento' => '5 €','importe' => '5']);
        descuento::create(['id' => '2','tipo' => 'entero','descuento' => '10 €','importe' => '10']);
        descuento::create(['id' => '3','tipo' => 'porcentaje','descuento' => '10 %','importe' => '0.1']);
        descuento::create(['id' => '4','tipo' => 'porcentaje','descuento' => '20 %','importe' => '0.2']);
        descuento::create(['id' => '5','tipo' => 'porcentaje','descuento' => '30 %','importe' => '0.3']);
        descuento::create(['id' => '6','tipo' => 'porcentaje','descuento' => '40 %','importe' => '0.4']);
        descuento::create(['id' => '7','tipo' => 'porcentaje','descuento' => '50 %','importe' => '0.5']);
            
        
    }
}
