<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\Toko::create([
            'barang' => 'gula',
            'harga' => 'Rp. 5000'
        ]);

        \App\Models\Toko::create([
            'barang' => 'kopi',
            'harga' => 'Rp. 1000'
        ]);
    }
}
