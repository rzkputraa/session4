@extends('layout.template')
@section('container')
    <div class="container">
        <h3>Product</h3>
        <a href="/product/create" class="btn btn-warning" />Tambah</a>
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>

            @foreach ($products as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td><a href="/product/{{ $product->id }}/edit" class="btn btn-info">Edit</a>
                        {{-- <a href="" class="btn btn-danger">Hapus</a> --}}
                        <form action="/product/{{ $product->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
