<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@otium.com.bo'],
            [
                'name'     => 'Administrador OTIUM',
                'password' => Hash::make('Otium2026!'),
                'role'     => 'super_admin',
            ]
        );
    }
}
