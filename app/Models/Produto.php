<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Produto extends Model
{
    //especificar quais campos da tabela vao ser trabalhados
    protected $fillable = ['nome' , 'valor' , 'estoque', 'categoria_id' ];
    
    public function categorias()
    {
        return $this->hasOne(Categoria::class, 'id' , 'categoria_id');
    }
    
    use HasFactory;
}
