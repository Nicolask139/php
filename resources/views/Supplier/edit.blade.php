@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1>Editar Fornecedores</h1>
    <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="description">Nome</label>
            <input type="text" class="form-control"
            name="name" value="{{ $supplier->name }}">
        </div>
        <div class="form-group">
            <label for="description">Telefone</label>
            <input type="text" class="form-control"
            name="phone" value="{{ $supplier->phone }}">
        </div>
        <div class="form-group">
            <label for="description">CEP</label>
            <input type="text" class="form-control"
            name="zipcode" value="{{ $supplier->zipcode }}">
        </div>
        <div class="form-group">
            <label for="description">Rua</label>
            <input type="text" class="form-control"
            name="address" value="{{ $supplier->address }}">
        </div>
        <div class="form-group">
            <label for="description">Bairro</label>
            <input type="text" class="form-control"
            name="district" value="{{ $supplier->district }}">
        </div>
        <div class="form-group">
            <label for="description">Cidade</label>
            <input type="text" class="form-control"
            name="city" value="{{ $supplier->city }}">
        </div>
        <div class="form-group">
            <label for="description">Estado</label>
            <input type="text" class="form-control"
            name="state" value="{{ $supplier->state }}">
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>

@endsection


