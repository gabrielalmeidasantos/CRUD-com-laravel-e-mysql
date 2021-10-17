@extends('layouts.app')

@section('content')

<h2 style="text-align:center">Listagem de dados</h2>
<br>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Valor</th>
                <th scope="col">Ano de criação</th>
                <th scope="col">Editar</th>
                <th scope="col">Apagar</th>
            </tr>
        </thead>
        @foreach ($jogos as $jogo)
        <tbody>
            <tr>
                <th scope="row">{{$jogo->id}}</th>
                <td>{{$jogo->nome}}</td>
                <td>{{$jogo->categoria}}</td>
                <td>{{$jogo->valor}}</td>
                <td>{{$jogo->ano_criacao}}</td>
                <td><a type="button" class="btn btn-outline-primary" href={{ route('jogos-edit', ['id'=>$jogo->id]) }}>Editar</a></td>
                <form action={{ route('jogos-destroy', ['id'=>$jogo->id]) }} method="post">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-outline-danger">Apagar</button></td>
                </form>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

<!-- <a href={{ route("index") }}>link</a> -->
@endsection