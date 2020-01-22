@extends('layouts.app')

@section('header')
<h2>{{$product->title}}</h2>
@endsection

@section('content')
{{$product->title}}<br>
{{$product->description}}<br>
{{$product->price}}<br>
{{$product->pub_date}}<br>
<img src="{{asset('storage/' . $product->image)}}" onerror="this.style.display='none'"/>

<hr>
<a href="{{route('Product.list') }}">terug naar alle bedrijven</a>
@endsection
