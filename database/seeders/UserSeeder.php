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

        User::create([
            'name' => 'Cliente',
            'email' => 'cliente@teste.com',
            'endereco' => '444 tal tal',
            'telefone' => '2222-2222',
            'cpf' => '12345',
            'password' => Hash::make('123456'),
            'role' => 'cliente'
        ]);

        User::create([
            'name' => 'Cliente2',
            'email' => 'cliente2@teste.com',
            'endereco' => '444 tal tal',
            'telefone' => '2222-2222',
            'cpf' => '21235',
            'password' => Hash::make('123456'),
            'role' => 'cliente'
        ]);
    }
}
