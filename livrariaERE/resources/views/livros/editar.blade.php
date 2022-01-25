@extends('layouts.main')

@section('content')
        <form action="{{ route('atualizar_livro', ['id' => $livro->id])}}" method="post">
            @csrf 
            <div><label for="isbn">ISBN</label><input type="text" name="isbn" id="isbn" value="{{$livro->isbn}}"></div>
            <div><label for="nome">Nome</label><input type="text" name="nome" id="nome" value="{{$livro->nome}}"></div>
            <div><label for="custo">Autor</label><input type="text" name="autor" id="autor" value="{{$livro->autor}}"></div>
            <div><label for="preco">Preco</label><input type="text" name="preco" id="preco" value="{{$livro->preco}}"></div>
            <button type="submit">Salvar</button>
         </form>
@endsection