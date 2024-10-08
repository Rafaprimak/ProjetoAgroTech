<!-- resources/views/products/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Produto</h1>
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <br>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrição</label>
            <br>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Preço</label>
            <br>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Criar Produto</button>
    </form>
</div>
@endsection