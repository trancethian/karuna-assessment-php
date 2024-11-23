@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Edit Product</h1>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
    </div>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label"><strong>Name:</strong></label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label"><strong>Price (RM):</strong></label>
            <input type="number" id="price" name="price" class="form-control" value="{{ $product->price }}" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="details" class="form-label"><strong>Detail:</strong></label>
            <textarea id="details" name="details" class="form-control" rows="4" required>{{ $product->details }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Publish:</strong></label><br>
            <div>
                <input type="radio" id="publish_yes" name="is_published" value="1" {{ $product->publish ? 'checked' : '' }}>
                <label for="publish_yes">Yes</label>
            </div>
            <div>
                <input type="radio" id="publish_no" name="is_published" value="0" {{ !$product->publish ? 'checked' : '' }}>
                <label for="publish_no">No</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
