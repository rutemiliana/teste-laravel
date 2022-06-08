<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Fornecedor;
use Illuminate\Http\Request;
use Maathwebsite\Excel\Facades\Excel;

class ProdutoController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function produtoCategorias()
    {
        //acessando a variavel categoria da model produto
        $produtos = Produto::with('categorias')->get();
        return view('inicio', ['produtos' => $produtos , 'categoria']);
    }


    public function index()

    {
        //acessando a variavel categoria da model produto
        $produtos = Produto::with('categorias')->get();
        return view('ver-produtos' , compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //filtro de registro
        $search = request('search');

        //se tiver algo no campo search
        if($search){
            $categorias = Categoria::where([
                ['categoria' , 'like' ,'%' .$search.'%']
            ])->get();
        } else {
            $categorias = Categoria::all();
        }
        return view('inicio', ['categorias' => $categorias , 'search' =>  $search ]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Produto::create([
        $request->validate([
            'nome' => 'required',
            'valor' => 'required',
            'estoque' => 'required',
            'categoria_id' => 'required',
        ]);

        Produto::create($request->all());



        //dd($request ->all()); //all para mostrar todas as informações que estao chegando
        //dd = debug and die. mostra na trela e encerra a aplicação
        return redirect()->route('ver.produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id); //variavel pra armazenar tudo que estiver em Produto
        //dd($id); teste pra ser se tá td ok
        return view('editar', ['produto' => $produto]); //manda a variavel pra tela ver
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->update([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'estoque' => $request->estoque,
        ]);
        return redirect()->route('ver.produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->route('ver.produtos');
    }

    //import

    public function import(){
        Excel::import(new ProdutoImport , request()->file('file'));
        return back();
    }

}
