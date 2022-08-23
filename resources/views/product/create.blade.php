@extends('layout.template')
@section('container')
    <div class="col-md-6">
        <form action="">
            <div class="mb-3 mt-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Description</label>
                <textarea name="description" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Price</label>
                <input type="number" class="form-control" placeholder="Price" name="price">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
