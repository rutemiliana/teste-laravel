<?php

namespace App\Imports;

use App\Models\Produto;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProdutoImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Produto([
            'nome' => $row['nome'],
            'valor' => $row['valor'],
            'estoque'=> $row['estoque'],
            'categoria_id'=> $row['categoria_id']
        ]);
    }
}
