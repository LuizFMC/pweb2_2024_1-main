<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;


class ProdutoController extends Controller
{
    public function index()
    {
        //app/http/Controller
        $dados = Produto::all();

        // dd($dados);

        return view("produto.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produtos = Produto::all();

        return view("produto.form",['produto'=>$produtos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //app/http/Controller

        $request->validate([
            'nome' => "required",
            'valor' => "required",
            'qtd' => "required",
            'qtdestoque' => "required",

        ], [
            'nome.required' => "O :attribute é obrigatório",
            'valor.required' => "O :attribute é obrigatório",
            'qtd.required' => "O :attribute é obrigatório",
            'qtdestoque.required' => "O :attribute é obrigatório",
        ]);

        Produto::create(
            [
                'nome' => $request->nome,
                'valor' => $request->valor,
                'qtd' => $request->qtd,
                'qtdestoque' => $request->qtdestoque,

            ]
        );
        return redirect('produto');
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
    public function edit(string $id)
    {
        $dado = Produto::findOrFail($id);

        $produtos = Produto::all();

        return view("produto.form", [
            'dado' => $dado,
            'produto'=> $produtos
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //app/http/Controller

        $request->validate([
            'nome' => "required",
            'valor' => "nullable",
            'qtd' => "required",
            'qtdestoque' => "required",
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'valor.required' => "O :attribute é obrigatório",
            'qtd.required' => "O :attribute é obrigatório",
            'qtdestoque.required' => "O :attribute é obrigatório",
        ]);

        Produto::updateOrCreate(
            ['id' => $request->id],
            [
                'nome' => $request->nome,
                'valor' => $request->valor,
                'qtd' => $request->qtd,
                'qtdestoque' => $request->qtdestoque,
            ]
        );

        return redirect('produto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dado = Produto::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('produto');
    }

    public function search(Request $request)
    {
        if (!empty($request->nome)) {
            $dados = Produto::where(
                "nome",
                "like",
                "%" . $request->nome . "%"
            )->get();
        } else {
            $dados = Produto::all();
        }
        // dd($dados);

        return view("produto.list", ["dados" => $dados]);
    }
}
