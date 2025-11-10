@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}!</p>
    <div class="list-group">
        <a href="{{ route('products.index') }}" class="list-group-item list-group-item-action">Manage Products</a>
        <a href="{{ route('customers.index') }}" class="list-group-item list-group-item-action">Manage Customers</a>
        <a href="{{ route('orders.index') }}" class="list-group-item list-group-item-action">Manage Orders</a>
    </div>
</div>
@endsection
