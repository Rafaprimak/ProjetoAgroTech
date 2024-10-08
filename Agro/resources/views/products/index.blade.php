<div class="col-md-8">
    <h1>Products</h1>
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
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>|</td>
                    <td>{{ $product->name }}</td>
                    <td>|</td>
                    <td>{{ $product->description }}</td>
                    <td>|</td>
                    <td>{{ $product->price }}</td>
                    <td>|</td>
                    <td>{{ $product->created_at }}</td>
                    <td>|</td>
                    <td>{{ $product->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>