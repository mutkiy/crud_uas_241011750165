<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat data user admin pertama
        User::create([
            'name' => 'Siti Muthmainnah',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'), // Password dienkripsi demi keamanan
        ]);
    }
}