@extends('layouts.app')

@section('title', 'Add New Product')

@section('content')
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
    </div>

    <h1>Add New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label"><strong>Name:</strong></label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label"><strong>Price (RM):</strong></label>
            <input type="number" id="price" name="price" class="form-control" placeholder="99.90" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="details" class="form-label"><strong>Detail:</strong></label>
            <textarea id="details" name="details" class="form-control" placeholder="Detail" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Publish:</strong></label><br>
            <div>
                <input type="radio" id="publish_yes" name="is_published" value="1" checked>
                <label for="publish_yes">Yes</label>
            </div>
            <div>
                <input type="radio" id="publish_no" name="is_published" value="0">
                <label for="publish_no">No</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
