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
use App\Http\Controllers\CategoriaController;
use App\Models\Produto;


Route::get('/criar-produto' , [ProdutoController::class, 'create'])->name('criar.produto');

//rota da criação de produto
Route::post('/criar-produto', [ProdutoController::class, 'store'])->name('criar.produto');
    //store = armazenar
    //criando um produto no banco de dadosz

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

/**categorias */
//criar categoria
Route::get('/criar-categoria', function () {
    return view('criar-categoria');
});
Route::post('/criar-categoria', [CategoriaController::class, 'store']);

//ver categorias
Route::get('/ver-categorias', [CategoriaController::class, 'index'])->name('ver.categorias');

//Editar categoria
Route::get('/editar-categoria/{id}', [CategoriaController::class, 'edit']);
Route::post('/editar-categoria/{id}', [CategoriaController::class, 'update']);


//deletar categoria
Route::get('/excluir-categoria/{id}', [CategoriaController::class, 'destroy']);


//Upload de arquivo

Route::post('produto-import', [ProdutoController::class, 'import'])->name('produto.import');

//exportar excel

Route::get('produto-export', [ProdutoController::class, 'export'])->name('produto.export');






