@extends('layouts.app')

@section('content')
<!--  -->
<div class="container">
    <h4>Crie um novo jogo</h4>
    <hr>
    <form action={{ route('jogos-store') }} method="POST">
        <!-- isso diz pro laravel confiar nesse formulario -->
        @csrf
        <!--  -->
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="" placeholder="Nome do jogo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" id="" placeholder="Categoria do jogo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="number" name="valor" id="" placeholder="Valor do jogo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="ano">Ano de criação do jogo:</label>
            <input type="number" name="ano_criacao" id="" placeholder="Ano de criação do jogo" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Adicionar</button>
    </form>
</div>




@endsection