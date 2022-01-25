@extends('layouts.main')

@section('content')

            <form action="{{ route('salvar_livro') }}" method="post">
            @csrf 
            <div><label for="isbn">ISBN</label><input type="text" name="isbn" id="isbn"></div>
            <div><label for="nome">Nome</label><input type="text" name="nome" id="nome"></div>
            <div><label for="custo">Autor</label><input type="text" name="autor" id="autor"></div>
            <div><label for="preco">Preco</label><input type="text" name="preco" id="preco"></div>
            <button type="submit">Salvar</button>
         </form>

@endsection