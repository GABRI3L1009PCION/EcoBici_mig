<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'irodasc2@miumg.edu.gt'],
            [
                'name' => 'Admin EcoBici',
                'password' => Hash::make('admin123'), // cámbialo luego
                'role' => 'admin',
                'dpi' => '3309334421801',
                'telefono' => '5535-5469',
            ]
        );
    }
}
