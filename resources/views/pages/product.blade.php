
@extends('layout')
@section('content')
<div class="container">
    <h1 style="color: white;" class="text-center">All available products are given below</h1>

    @foreach($product as $products)
    <h6 style="color: white;" class="text-center">{{$products}}</h6>  
    @endforeach
</div>
@endsection
