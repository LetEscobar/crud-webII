<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produto = Produto::orderBy('created_at', 'DESC')->get();
        return view('produto.index', compact('produto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produto = new Produto();
        return view('produto.create')->with(['produto' => $produto]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produto = new Produto;
        $this->validate($request, [
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'quantidade' => 'required'
        ]);
        $produto->fill($request->all());
        $produto->save();
        return redirect()->route('produtos.index')->with('success', 'Produto adicionado com sucesso!');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = Produto::findOrFail($id);
        return view('produto.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produto = Produto::find($id);
        $this->validate($request, [
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'quantidade' => 'required'
        ]);
        $produto->fill($request->all());
        $produto->save();
        return redirect()->route('produtos.index')->with('success', 'Produto alterado com sucesso!');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso!');
    }
}
