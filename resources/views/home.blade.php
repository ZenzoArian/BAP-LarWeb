@extends('layouts.master')

@section('header')
Hompage
@endsection

@section('content')
<h2>Producten</h2>

<ol>

@foreach($producten as $product)
@if ($product == 'autoradio')
<li><strong>{{$product}}</strong></li>
@else
<li>{{$product}}</li>
@endif
@endforeach
</ol>

@for($i=1;$i<=10;$i++)
  {{$i}} <br>

@endfor

@endsection
