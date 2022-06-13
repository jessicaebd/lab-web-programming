<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->insert([
            'id' => Str::uuid(),
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => 'admin123',
            'role' => 'admin'
        ]);
    }
}
