@extends('layouts.app')

@section('content')

<div class="container">
    <h4>Editar o jogo</h4>
    <hr>
    <form action={{ route('jogos-update', ['id' => $jogo->id]) }} method="post">
        <!-- isso diz pro laravel confiar nesse formulario -->
        @csrf
        @method('PUT')
        <!--  -->
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="" placeholder="Nome do jogo" class="form-control" required value={{ $jogo->nome }}>
        </div>

        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" id="" placeholder="Categoria do jogo" class="form-control" required value={{ $jogo->categoria }}>
        </div>

        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="number" name="valor" id="" placeholder="Valor do jogo" class="form-control" required value={{ $jogo->valor }}>
        </div>

        <div class="form-group">
            <label for="ano">Ano de criação do jogo:</label>
            <input type="number" name="ano_criacao" id="" placeholder="Ano de criação do jogo" class="form-control" required value={{ $jogo->ano_criacao }}>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Atualizar</button>
    </form>
</div>

@endsection