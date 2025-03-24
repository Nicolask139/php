@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1>Criar Fornecedor</h1>
    <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-6">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col-6">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="col-6">
                <label for="zipcode">CEP</label>
                <input type="text" class="form-control" name="zipcode" id="zip_code">
            </div>

            <div class="col-6">
                <label for="address">Endereço</label>
                <input type="text" class="form-control address" name="address">
            </div>

            <div class="col-6">
                <label for="district">Bairro</label>
                <input type="text" class="form-control district" name="district">
            </div>

            <div class="col-6">
                <label for="city">Cidade</label>
                <input type="text" class="form-control city" name="city">
            </div>

            <div class="col-6">
                <label for="state">Estado</label>
                <input type="text" class="form-control uf" name="state">
            </div>

        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>

{{-- Importando o jQuery corretamente --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).on('change', "#zip_code", function () {
        var cep = $(this).val().replace(/\D/g, '');

        if (cep.length === 8) {
            $.getJSON(`https://viacep.com.br/ws/${cep}/json/`, function (dados) {
                if (!("erro" in dados)) {
                    $(".address").val(dados.logradouro);
                    $(".district").val(dados.bairro);
                    $(".city").val(dados.localidade);
                    $(".uf").val(dados.uf);
                } else {
                    alert('CEP não encontrado.');
                }
            });
        }
    });
</script>
@endsection

