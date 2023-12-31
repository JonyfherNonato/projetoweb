@extends('layouts.app')
@section('venda.cadastro')
<h1>Cadastro de Venda </h1>
<form method="post" action="{{ route('venda.novo') }}">
    @csrf
    <select class="form-control" name="id_usuario">
        @foreach($usuarios as $u)
        <option value={{ $u->id }}> {{$u->nome}} </option>
        @endforeach
    </select>
    <input type="number" class="form-control" name="valor" placeholder="valor">
    <input type="submit" class="btn btn-success" value="Enviar">
</form>
@endsection