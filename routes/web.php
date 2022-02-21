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
use App\Models\Produto;

Route::get('/', function () {
    return view('inicio');
});

//rota da criação de produto
Route::post('/cadastrar-produto', function (Request $request) {
    //criando um produto no banco de dados
    Produto::create([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque,
    ]);
    //dd($request ->all()); //all para mostrar todas as informações que estao chegando
    //dd = debug and die. mostra na trela e encerra a plicação
    echo "Produto criado com sucesso";
});

//tentativa

Route::get('/ver-produto', [ProdutoController::class,'verProdutos']);
    

//rota de leitura do produto
Route::get('/ver-produto/{id}', function ($id) {
    $produto = Produto::find($id); //variavel pra armazenar tudo que estiver em Produto
    //dd($id); teste pra ser se tá td ok
    return view('ver', ['produto' => $produto]); //manda a variavel pra tela ver
});

//rotas de edicao do produto. get pra pegar o produto e mostrar na tela. Post pra enviar para o servidor
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

