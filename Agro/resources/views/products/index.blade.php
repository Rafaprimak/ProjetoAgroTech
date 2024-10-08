<!-- resources/views/products/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <button><a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Criar Produto</a></button>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">|</th>
                <th scope="col">Nome</th>
                <th scope="col">|</th>

                <th scope="col">Descrição</th>
                <th scope="col">|</th>

                <th scope="col">Preço</th>
                <th scope="col">|</th>

                <th scope="col">Criado em</th>
                <th scope="col">|</th>

                <th scope="col">Atualizado em</th>
                <th scope="col">|</th>

                <th scope="col">Ações</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <th scope="col">|</th>

                    <td>{{ $product->name }}</td>
                    <th scope="col">|</th>

                    <td>{{ $product->description }}</td>
                    <th scope="col">|</th>

                    <td>{{ $product->price }}</td>
                    <th scope="col">|</th>

                    <td>{{ $product->created_at }}</td>
                    <th scope="col">|</th>

                    <td>{{ $product->updated_at }}</td>
                    <th scope="col">|</th>

                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="post" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection