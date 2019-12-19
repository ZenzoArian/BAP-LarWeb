@extends('layouts.master')

@section('header')
<h3>Product toevoegen</h3>

@endsection

@section('content')

@if($errors->any())
<div class="alert alert-danger">
  <p>Er zijn fouten, het formulier is niet opgeslagen!</p>
</div>
@endif
<form action="{{route('product.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="">Titel</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
    @error('title')
    <div class="error-message">
      {{$message}}
    </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="">Omschrijving</label>
    <textarea class="form-control @error('description') is-invalid @enderror" name="description">{{old('description')}}</textarea>
    @error('description')
    <div class="error-message">
      {{$message}}
    </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="">Prijs</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{old('price')}}">
    @error('price')
    <div class="error-message">
      {{$message}}
    </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="">Publicatiedatum</label>
    <input type="text" class="form-control @error('pub_date') is-invalid @enderror" name="pub_date" value="{{old('pub_date')}}">
    @error('pub_date')
    <div class="error-message">
      {{$message}}
    </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Opslaan</button>
</form>
@endsection
