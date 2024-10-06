<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(2)->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'pasword'=>bcrypt('11111111'),
            'email_verified'=>time()
        ]);
    }
}
