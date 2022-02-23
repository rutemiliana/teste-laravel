<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use App\Http\Controllers\ProdutoController; //importando
use App\Models\Produto;


Route::get('/', function () {
    return view('inicio');
});

//rota da criação de produto
Route::post('/ver-produtos', [ProdutoController::class, 'store'])->name('criar.produto');;
    //store = armazenar
    //criando um produto no banco de dados

//tentativa

Route::get('/ver-produtos', [ProdutoController::class,'index'])->name('ver.produtos'); //dei nome para a rota

Route::get('/editar-produto/{id}', [ProdutoController::class, 'edit']);

Route::post('/editar-produto/{id}', [ProdutoController::class, 'update']);

Route::get ('/excluir-produto/{id}', [ProdutoController::class, 'destroy']);


/* //rotas de edicao do produto. get pra pegar o produto e mostrar na tela. Post pra enviar para o servidor
Route::get('/editar-produto/{id}', function ($id) {
    $produto = Produto::find($id); //variavel pra armazenar tudo que estiver em Produto
    //dd($id); teste pra ser se tá td ok
    return view('editar', ['produto' => $produto]); //manda a variavel pra tela ver
});

Route::post('/editar-produto/{id}', function (Request $request , $id) {
    $produto = Produto::find($id);
    $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque,
    ]);
    echo "Produto editado com sucesso";
});

//deletar produto
Route::get('/excluir-produto/{id}', function ($id) {
    $produto = Produto::find($id);
    $produto->delete();
    echo "Produto excluido com sucesso";
});

*/



