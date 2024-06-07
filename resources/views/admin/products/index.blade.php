@extends('layouts.admin')
@section('content')
    <h1>All products</h1>
    @foreach ($products as $product)
        <div>Product title: {{ $product->title }}</div>

        <button class="btn btn-info"><a class="text-decoration-none text-reset" href="{{ route('admin.products.show', ['product' => $product->id]) }}">VIEW</a></button>
    @endforeach
@endsection
