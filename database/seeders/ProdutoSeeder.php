<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create([
            'nome' => 'Notebook',
            'preco' => 6000.50,
            'quantidade' => 12,
            'categoria_id' => 1,
            'user_id' => 1,
        ]);

        Produto::create([
            'nome' => 'Pizza',
            'preco' => 47.50,
            'quantidade' => 25,
            'categoria_id' => 2,
            'user_id' => 1,
        ]);

        Produto::create([
            'nome' => 'Lajota',
            'preco' => 21.90,
            'quantidade' => 11,
            'categoria_id' => 2,
            'user_id' => 2,
        ]);


    }
}
