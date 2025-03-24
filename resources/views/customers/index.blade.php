@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Clientes</h1>
    <div class="text-right">
        <a href="{{ route('customers.create') }}" class="btn btn-primary mb-5">Adicionar Cliente</a>
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
        @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->zipcode }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->district }}</td>
            <td>{{ $customer->city }}</td>
            <td>{{ $customer->state }}</td>
            
            <td>
                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning">Editar</a>
                <form style="display: inline;" action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esse cliente?')">
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

