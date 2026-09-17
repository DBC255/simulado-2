<?php

namespace Database\Seeders;

use App\Models\categorias;
use App\Models\produtos;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

         User::create([
            'name'=> 'Admin',
            'email' => 'admin@senai.br',
            'password' => Hash::make('123'),
        ]);
        categorias::create([
            'nome' => 'cimento',
        ]);

        categorias::create([
           'nome' => 'tinta'
        ]);
        categorias::create([
           'nome' => 'argamassa'
        ]);

        produtos::create([
            'nome' => 'tinta comun',
            'praso_validade' => '2027-02-02',
            'valor' => 19.55,
            'cor' => 'azul',
            'peso_kg' => 5,
            'observacoes' => 'liso, acabamento',
            'categorias' => 2,
            'qtd_min' => 10,
            'qtd_atual' => 0
        ]);

        produtos::create([
            'nome' => 'cimento rapido ',
            'praso_validade' => '2027-02-02',
            'valor' => 109.55,
            'cor' => 'cinza',
            'peso_kg' => 50,
            'observacoes' => 'liso, reboco e estrutura',
            'categorias' => 2,
            'qtd_min' => 100,
            'qtd_atual' => 0
        ]);
    }
}
