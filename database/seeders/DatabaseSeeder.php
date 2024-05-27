<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\Hash;
use Spatie\Permission\Contracts\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(userSeeder::class);
        $this->call(tipoSeeder::class);
        $this->call(marcaSeeder::class);
        $this->call(productoSeeder::class);
        $this->call(descuentoSeeder::class);
        $this->call(codificacionSeeder::class);     
        $this->call(roleSeeder::class);     
     
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
