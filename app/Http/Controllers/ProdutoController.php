<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // SELECT * FROM TIPO_PRODUTOS e armazenando o resultado no objeto $tipoProdutos
        // Esse objeto é um vetor de models
        //$tipoProdutos = TipoProduto::all();
        $produtos = DB::select("SELECT PRODUTOS.ID as id,
                                PRODUTOS.NOME as nome,
                                    PRODUTOS.PRECO as preco,
                                    TIPO_PRODUTOS.DESCRICAO as descricao
                                FROM PRODUTOS
                                JOIN TIPO_PRODUTOS ON PRODUTOS.TIPO_PRODUTOS_ID = TIPO_PRODUTOS.ID;");

        return view("Produto/index")->with("produtos", $produtos);
    }

    public function create()
    {
        $tipoProdutos = DB::select("SELECT * FROM TIPO_PRODUTOS");
        return view("Produto/create") -> with("tipoProdutos", $tipoProdutos);
    }

    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->Tipo_Produtos_id = $request->Tipo_Produtos_id;
        $produto->ingredientes = $request->ingredientes;
        $produto->urlImage = $request->urlImage;

        $produto->save();
        return $this->index();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
