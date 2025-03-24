@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Usuarios</h1>
    <div class="text-right">
        <a href="{{ route('users.create') }}"
        class="btn btn-primary">Adicionar Produto</a>
    </div>
</div>
<table class="table table-striped"> 
    <tr>
        <th>Nome</th>
        <th>Cpf</th>
        <th>Nascimento</th>
        <th>Email</th>
        <th>Senha</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->cpf }}</td>
        <td>{{ $user->nascimento }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->password }}</td>
        <td><a href="{{ route('users.edit', $user->id) }}" 
            class="btn btn-warning">Editar</a>
        <form style="display: inline;" action="{{ route('users.destroy', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"
            onclick="return confirm('Tem certeza que deseja excluir esse Usuario?')">
                Excluir
            </button>
        </form>
        </td>
    </tr>
    @endforeach
</table>

