<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Admin::create([
            'name' => 'admin',
            'password' => bcrypt('admin'),
        ]);
        
        Admin::create([
            'name' => 'admin123',
            'password' => bcrypt('admin123')
        ]);
    }
}
