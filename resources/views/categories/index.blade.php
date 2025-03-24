@extends('layouts.master')
@section('content')

<div class="container mt-5">
    <h1 class="text-center">Categorias</h1>
    <div class="text-right">
        <a href="{{  route('categories.create') }}" class="btn btn-primary mb-5">Adicionar Categoria</a>
    </div>

<div class="table-responsive"></div>
<table class="table table-striped">
<tr>
    <th>Descrição</th>
    <th>Ação</th>
</tr>

@foreach($categories as $category)
<tr>
    <td>{{ $category->description }}</td>
    <td><a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Editar</a>
    <form style="display: inline;" action="{{ route('categories.destroy', $category->id )}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">+
    Excluir</button>
    </form>
    </td>

</tr>
@endforeach
</table>
</div></div>
@endsection