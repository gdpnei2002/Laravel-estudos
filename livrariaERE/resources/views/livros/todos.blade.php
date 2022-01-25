@extends('layouts.main')

@section('content')

        <td><a href="{{route('novo_livro')}}"
            title="Novo Livro"> Novo livro</a></td>
        <table id="table" class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">ISBN</th>
                <th scope="col">AUTOR</th>
                <th scope="col">TITULO</th>
                <th scope="col">PREÇO</th>
            </tr>
            </thead>
            <tbody>
           
           @foreach($livros as 
            $livro)
            <tr>
                <td>{{$livro->id}}</td>
                <td>{{$livro->isbn}}</td>
                <td>{{$livro->autor}}</td>
                <td>{{$livro->nome}}</td>
                <td>{{$livro->preco}}</td>
                <td><a href="{{route('editar_livro',['id'=>$livro->id])}}"
                    title="Editar livro {{$livro->nome}}"> Editar</a></td>
                <td><a href="{{route('excluir_livro',['id'=>$livro->id])}}"
                    title="Excluir livro {{$livro->nome}}"> Excluir</a></td>
            </tr>   
            @endforeach
         </table>

@endsection