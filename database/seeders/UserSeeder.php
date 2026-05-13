<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Test User',
                'email' => 'test@test.com',
                'password' => Hash::make('12345678'),
                'phone' => '9999999999',
                'status' => 1
            ],
            [
                'name' => 'Stage User',
                'email' => 'stage@stage.com',
                'password' => Hash::make('12345678'),
                'phone' => '8888888888',
                'status' => 1
            ],
        ]);
    }
}
