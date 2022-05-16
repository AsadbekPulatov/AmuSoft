<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Asadbek',
            'email' => 'asadbek.polatov.02@mail.ru',
            'password' => Hash::make('123456789')
        ]);
        $user = User::create([
            'name' => 'Beksulton',
            'email' => 'beksulton1112@gmail.com',
            'password' => Hash::make('123456789')
        ]);
        $user = User::create([
            'name' => 'Sanjar',
            'email' => 'sanjar@gmail.com',
            'password' => Hash::make('123456789')
        ]);
    }
}
