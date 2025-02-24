@extends('layouts.master')
@section('content')

<div class="container mt-5">
    <h1 class="text-center">Categorias</h1>
    <div class="text-right">
        <a href="{{  route('categories.create') }}" class="btn btn-success">Adicionar Categoria</a>
    </div>
</div>

<table class="table table-striped">
<tr>
    <th>Descrição</th>
</tr>

@foreach($categories as $category)
<tr>
    <td>{{ $category->description }}</td>
</tr>
@endforeach
