@extends('layouts.admin')
@section('content')
    <h1>All products</h1>
    @foreach ($products as $product)
        <div>Product title: {{ $product->title }}</div>
    @endforeach
@endsection
