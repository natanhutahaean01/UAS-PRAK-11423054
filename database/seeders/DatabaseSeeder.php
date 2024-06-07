<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> 52cf1ac (inisialisasi awal)
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
<<<<<<< HEAD
        $this->call([
            UserSeeder::class,
            LapanganSeeder::class,
            SewaSeeder::class
        ]);
=======
>>>>>>> 52cf1ac (inisialisasi awal)
    }
}
