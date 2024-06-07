@extends('layouts.admin')
@section('content')

    <div>Product title: {{ $product->title }}</div>
    <div>Product description: {{ $product->description }}</div>
    <div>Product price: {{ $product->price }}</div>
    <div>Product weight: {{ $product->weight }}</div>
    <div>Product quantity: {{ $product->quantity }}</div>
    <div>Product avalaible: {{ $product->is_available}}</div>


@endsection
