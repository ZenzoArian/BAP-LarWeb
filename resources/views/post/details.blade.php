@extends('layouts.app')

@section('header')
<h2>{{$post->title}}</h2>
@endsection

@section('content')
{{$post->title}}<br>
{{$post->description}}<br>
{{$post->price}}<br>
{{$post->pub_date}}<br>
<img src="{{asset('storage/' . $post->image)}}" onerror="this.style.display='none'"/>

<hr>
<a href="{{route('Post.list') }}">Back to posts</a>
@endsection
