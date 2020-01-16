@extends('layouts.master')

@section('header')
<h2>{{$products->title}}</h2>
@endsection

@section('content')
  <img src="{{asset('storage/' . $product->image)}}" />
@endsection
