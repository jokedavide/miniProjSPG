@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Product</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description"></textarea>
        </div>
        <div>
            <label>Price:</label>
            <input type="number" step="0.01" name="price" required>
        </div>
        <div>
            <label>Quantity:</label>
            <input type="number" name="quantity" required>
        </div>
        <button type="submit">Save</button>
    </form>
</div>
@endsection
