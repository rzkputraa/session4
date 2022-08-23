@extends('layout.template')
@section('container')
    <div class="container">
        <h3>Product</h3>
        <a href="" class="btn btn-warning" />Tambah</a>
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>

            @foreach ($products as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
