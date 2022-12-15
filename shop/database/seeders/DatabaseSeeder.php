<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'name' => 'Sukishaa',
        'email' => 'sukishaa@admin.com',
        'password' => bcrypt('apaaja'),
        'level' => 'owner'
        ]);
        User::create([
        'name' => 'Sukimumu',
        'email' => 'sukimumu@admin.com',
        'password' => bcrypt('bolehaja'),
        'level' => 'admin'
        ]);
    }
}
