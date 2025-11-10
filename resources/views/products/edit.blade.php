@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Product</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $product->name }}" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description">{{ $product->description }}</textarea>
        </div>
        <div>
            <label>Price:</label>
            <input type="number" step="0.01" name="price" value="{{ $product->price }}" required>
        </div>
        <div>
            <label>Quantity:</label>
            <input type="number" name="quantity" value="{{ $product->quantity }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
</div>
@endsection
