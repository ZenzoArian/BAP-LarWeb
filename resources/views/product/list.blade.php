@extends('layouts.app')

@section('header')
<h2>All posts</h2>
<h2>{{ Auth::user()->name }}</h2>
@endsection

@section('content')
<table>
  @foreach($products as $product)
  <tr>
    <td><a href="{{route('Product.detail', ['id' => $product->id]) }}">{{$product->title}}</a></td>
    <td>{{$product->description}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->pub_date}}</td>
  </tr>
  @endforeach
</table>

{{$products->links()}}

@endsection
