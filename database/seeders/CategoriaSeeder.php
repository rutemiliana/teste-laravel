<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando o objeto
        $categoria = new Categoria();
        $categoria -> categoria = "Camisa";
        $categoria-> save();

        //método create (atenção para o atributo fillable da classe)
        Categoria::create([
            'categoria' => 'Calça',
        ]);
    }
}
