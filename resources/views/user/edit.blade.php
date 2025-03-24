@extends('layouts.master')
@section('content')

<div class="container mt-5">
    <h1>Editar Usuario</h1>
    <form action="{{ route ('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="cpf">Cpf</label>
            <input type="text" class="form-control" name="cpf">
        </div>
        <div class="form-group">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control" name="nascimento">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="text" class="form-control" name="password">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
@endsection