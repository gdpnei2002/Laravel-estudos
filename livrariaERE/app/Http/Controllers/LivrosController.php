<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    public function create(){
        return view('livros.create');
    }

    public function store(Request $request){
        Livro::create([
            'isbn' => $request->isbn,
            'nome' => $request->nome,
            'autor' => $request->autor,
            'preco' => $request->preco,
        ]);
        return view('livros.todos');
       
       
    }
    public function show(){
        $livros =Livro::all();
        return view('livros.todos',['livros' => $livros]);
    }
    public function destroy($id){
        $livro=Livro::findOrFail($id);
        $livro->delete();
        return "livro Excluido";
    }
    public function edit($id){
        $livro = Livro::findOrFail($id);
        return view('livros.editar', ['livro' => $livro]);
    }
    public function update(Request $request, $id){
        $livro = Livro::findOrFail($id);
        $livro->update([
            'isbn' => $request->isbn,
            'nome' => $request->nome,
            'autor' => $request->autor,
            'preco' => $request->preco,
        ]);
        return "livro atualizado com sucesso";

    }
}
