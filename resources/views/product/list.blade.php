@extends('layouts.master')

@section('header')
<h2>alle producten</h2>
@endsection

@section('content')
<table>
  @foreach($products as $product)
  <tr>
    <td><a href="#">{{$product->title}}</a></td>
    <td>{{$product->description}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->pub_date}}</td>
  </tr>
  @endforeach
</table>
@endsection
