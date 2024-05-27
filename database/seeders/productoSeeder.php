<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class productoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        producto::create(['id' => '1','id_marca' => '1','id_tipo' => '1','producto' => 'Ti','precio' => '14']);
        producto::create(['id' => '2','id_marca' => '1','id_tipo' => '1','producto' => 'Ti + 500 MB','precio' => '32']);
        producto::create(['id' => '3','id_marca' => '1','id_tipo' => '1','producto' => 'Ti + 1 GB','precio' => '47']);
        producto::create(['id' => '4','id_marca' => '1','id_tipo' => '2','producto' => '20 GB','precio' => '13']);
        producto::create(['id' => '5','id_marca' => '1','id_tipo' => '2','producto' => '45 GB','precio' => '17']);
        producto::create(['id' => '6','id_marca' => '1','id_tipo' => '2','producto' => 'Infinita GB','precio' => '27']);
        producto::create(['id' => '7','id_marca' => '1','id_tipo' => '4','producto' => 'Linea Duo','precio' => '9']);
        producto::create(['id' => '8','id_marca' => '1','id_tipo' => '4','producto' => 'La sinfín 500 MB','precio' => '6']);
        producto::create(['id' => '9','id_marca' => '1','id_tipo' => '4','producto' => 'La sinfín 20 GB','precio' => '9']);
        producto::create(['id' => '10','id_marca' => '1','id_tipo' => '3','producto' => 'TV EXTRA','precio' => '5']);
        producto::create(['id' => '11','id_marca' => '1','id_tipo' => '3','producto' => 'TV PREMIUN','precio' => '11']);
        producto::create(['id' => '12','id_marca' => '2','id_tipo' => '1','producto' => 'Ti','precio' => '12.9']);
        producto::create(['id' => '13','id_marca' => '2','id_tipo' => '1','producto' => 'Ti + 500 MB','precio' => '31.99']);
        producto::create(['id' => '14','id_marca' => '2','id_tipo' => '1','producto' => 'Ti + 1 GB','precio' => '41.99']);
        producto::create(['id' => '15','id_marca' => '2','id_tipo' => '2','producto' => 'MOVIL 48 GB','precio' => '8']);
        producto::create(['id' => '16','id_marca' => '2','id_tipo' => '2','producto' => 'MOVIL 55 GB','precio' => '10']);
        producto::create(['id' => '17','id_marca' => '2','id_tipo' => '2','producto' => 'MOVIL 105 GB','precio' => '15']);
        producto::create(['id' => '18','id_marca' => '2','id_tipo' => '4','producto' => 'compartida','precio' => '3']);
        producto::create(['id' => '19','id_marca' => '2','id_tipo' => '4','producto' => 'adicional 10gb','precio' => '5']);
        producto::create(['id' => '20','id_marca' => '2','id_tipo' => '4','producto' => 'adicional 30 gb','precio' => '10']);
        producto::create(['id' => '21','id_marca' => '2','id_tipo' => '3','producto' => 'TV PREMIUM','precio' => '6']);
        producto::create(['id' => '22','id_marca' => '2','id_tipo' => '3','producto' => 'TV PREMIUM EXTRA','precio' => '12']);
        producto::create(['id' => '23','id_marca' => '1','id_tipo' => '5','producto' => 'La sinfín 25 GB','precio' => '16']);
        producto::create(['id' => '24','id_marca' => '1','id_tipo' => '5','producto' => 'La sinfín 55 GB','precio' => '26']);
        producto::create(['id' => '25','id_marca' => '1','id_tipo' => '5','producto' => 'La sinfín INFINITA GB','precio' => '35']);
        producto::create(['id' => '26','id_marca' => '1','id_tipo' => '5','producto' => 'La sinfín 500 MB','precio' => '6']);
        producto::create(['id' => '27','id_marca' => '2','id_tipo' => '5','producto' => 'movil 20 gb','precio' => '9.9']);
        producto::create(['id' => '28','id_marca' => '2','id_tipo' => '5','producto' => 'movil 30 gb','precio' => '14.9']);
        producto::create(['id' => '29','id_marca' => '2','id_tipo' => '5','producto' => 'movil 70 gb','precio' => '19.9']);

    }
}
