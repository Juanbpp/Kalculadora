<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marca;

class marcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        marca::create(['id' => '1','marca' => 'YOIGO']);
        marca::create(['id' => '2','marca' => 'MASMOVIL']);
        
    }
}
