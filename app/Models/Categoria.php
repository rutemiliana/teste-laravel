<?php

namespace App\Models;

use App\Models\Produto;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['categoria'];
    use HasFactory;

    public function produtos()
    {
        return $this->belongsToMany(Produto::class , 'id' , 'produto_id');
    }
}
