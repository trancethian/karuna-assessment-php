@extends('layouts.app')

@section('title', 'Product List')

@section('content')
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Laravel</h1>
        <a href="{{ route('products.create') }}" class="btn btn-success">Create New Product</a>
    </div>

    <!-- Search Form -->
    <form action="{{ route('products.index') }}" method="GET" class="mb-3">
        <div class="d-flex justify-content-end">
            <div class="d-flex">
                <input type="text" name="search" class="form-control mx-2 flex-shrink-1" value="{{ request('search') }}">
                <button class="btn btn-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>

    <!-- Product Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price (RM)</th>
                <th>Details</th>
                <th>Publish</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>RM {{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->details }}</td>
                    <td>{{ $product->is_published ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info text-white">Show</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary text-white">Edit</a>
                        <button 
                            type="button" 
                            class="btn btn-danger text-white" 
                            onclick="showDeleteConfirmation({{ $product->id }})">
                            Delete
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No products found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Delete Confirmation Modal -->
    @include('components.modals.confirm_delete')
@endsection

