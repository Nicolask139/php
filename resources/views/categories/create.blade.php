@extends('layouts.master')
@section('content')

<div class="container mt-5">
    <h1>Criar Categoria</h1>
    <form action="{{ route ('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="description">Descrição</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
@endsection