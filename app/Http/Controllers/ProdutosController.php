<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
  public $objProduto;

  public function __construct()
  {
    $this->objProduto = new Produto();
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $produtos = $this->objProduto->all();
    return view('produtos', ['produtos' => $produtos]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $produtos = $this->objProduto->all();
    return view('produto_create', ['produtos' => $produtos]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $created = $this->objProduto->create([
      'nome' => $request->input('nome'),
      'status' => $request->input('status'),
      'estoque' => $request->input('estoque'),
      'fornecedor' => $request->input('fornecedor'),
    ])->update($request->except(['_token']));

    if ($created) {
      return redirect()->back()->with('message', 'Produto adicionado');
    }
    else {
      return redirect()->back()->with('message', 'Não foi possível adicionar produto');
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Produto $produto)
  {
    return view('produto_edit', ['produto' => $produto]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $updated = $this->objProduto->where('id', $id)->update($request->except(['_token', '_method']));

    if ($updated) {
      return redirect()->back()->with('message', 'Alterações salvas');
    }
    else {
      return redirect()->back()->with('message', 'Não foi possível salvar alterações');
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $this->objProduto->where('id', $id)->delete();

    return redirect()->route('produtos.index');
  }
}