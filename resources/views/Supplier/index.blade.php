@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Fornecedores</h1>
    <div class="text-right">
        <a href="{{ route('suppliers.create') }}" class="btn btn-primary mb-5">Adicionar Fornecedores</a>
    </div>

<div class="table-responsive">
    <table class="table table-striped"> 
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>CEP</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Ação</th>
            
        </tr>
        @foreach($suppliers as $supplier)
        <tr>
            <td>{{ $supplier->name }}</td>
            <td>{{ $supplier->phone }}</td>
            <td>{{ $supplier->zipcode }}</td>
            <td>{{ $supplier->address }}</td>
            <td>{{ $supplier->district }}</td>
            <td>{{ $supplier->city }}</td>
            <td>{{ $supplier->state }}</td>
            
            <td>
                <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-warning">Editar</a>
                <form style="display: inline;" action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esse fornecedor?')">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

</div>
@endsection

