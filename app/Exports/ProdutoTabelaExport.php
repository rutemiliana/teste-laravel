<?php

namespace App\Exports;
use App\Models\Produto;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class ProdutoTabelaExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
        public function view(): View
        {
            $produtos = Produto::with('categoria')->get();
            return view('exports.produtos', [
                'produtos' => $produtos
            ]);
        }
}
