@extends('layouts.app')

@section('title', 'Show Product')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Show Product</h1>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
    </div>


    <div>
        <p><strong>Name:</strong> {{ $product->name }}</p>
        <p><strong>Price:</strong> RM {{ number_format($product->price, 2) }}</p>
        <p><strong>Details:</strong> {{ $product->details }}</p>
        <p><strong>Publish:</strong> {{ $product->publish ? 'Yes' : 'No' }}</p>
    </div>
@endsection
