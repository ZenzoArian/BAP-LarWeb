@extends('layouts.master')

@section('header')
<h2>{{$bedrijf->name}}</h2>
@endsection

@section('content')
{{$bedrijf->address}}<br>
{{$bedrijf->zipcode}}<br>
{{$bedrijf->city}}<br>
{{$bedrijf->country}}<br>
{{$bedrijf->phone}}<br>

<p>
{{$bedrijf->description}}
</p>
<hr>
<a href="{{route('company.list', ['id' => $bedrijf->id]) }}">terug naar alle bedrijven</a>
@endsection
