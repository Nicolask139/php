@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1>Editar Cliente</h1>
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="description">Nome</label>
            <input type="text" class="form-control"
            name="name" value="{{ $customer->name }}">
        </div>
        <div class="form-group">
            <label for="description">Telefone</label>
            <input type="text" class="form-control"
            name="phone" value="{{ $customer->phone }}">
        </div>
        <div class="form-group">
            <label for="description">CEP</label>
            <input type="text" class="form-control"
            name="zipcode" value="{{ $customer->zipcode }}">
        </div>
        <div class="form-group">
            <label for="description">Rua</label>
            <input type="text" class="form-control"
            name="address" value="{{ $customer->address }}">
        </div>
        <div class="form-group">
            <label for="description">Bairro</label>
            <input type="text" class="form-control"
            name="district" value="{{ $customer->district }}">
        </div>
        <div class="form-group">
            <label for="description">Cidade</label>
            <input type="text" class="form-control"
            name="city" value="{{ $customer->city }}">
        </div>
        <div class="form-group">
            <label for="description">Estado</label>
            <input type="text" class="form-control"
            name="state" value="{{ $customer->state }}">
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
@endsection


