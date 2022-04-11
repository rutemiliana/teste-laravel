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

         //create array for categories
         $categorias = [            
            ['id' => 2, 'categoria' => 'ANÁLISE DE PROJETO'],
            ['id' => 1, 'categoria' => 'APOIO A FISCALIZAÇÃO DE OBRAS'],
            ['id' => 3, 'categoria' => 'ELABORAÇÃO DE PROJETOS'],
        ];
        


        foreach ($categorias as $index => $categoria) {
            categoria::updateOrCreate(['id' => $categoria['id']], $categoria);
        }

         /*
         
         updateOrCreate possibilita que a seed seja rodada mais de uma vez  e evita conflito de ID. Além disso acaba com entradas repetidas.
         o foreach abaixo é um exemplo de como daria erro:


           foreach ($activities as $activity) {
                Activity::create($activity);
            }
            */


        /** 
        //instanciando o objeto
        $categoria = new Categoria();
        $categoria -> categoria = "Camisa";
        $categoria-> save();

        //método create (atenção para o atributo fillable da classe)
        Categoria::create([
            'categoria' => 'Calça',
        ]);*/
    }
}
