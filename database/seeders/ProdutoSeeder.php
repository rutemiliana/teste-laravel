<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $produto = new Produto();
        $produto -> nome = 'Camisa';
        $produto -> valor = 10.5;
        $produto -> estoque = 10;
        $produto -> categoria_id = 1;
        $produto -> save();
        */

        \App\Models\Produto::factory()->count(100) -> create();
    }
}
