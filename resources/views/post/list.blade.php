@extends('layouts.app')

@section('header')
<h2>All posts</h2>
<h2>{{ Auth::user()->name }}</h2>
@endsection

@section('content')
<table>
  @foreach($posts as $post)
  <tr>
    <td><a href="{{route('Post.detail', ['id' => $post->id]) }}">{{$post->title}}</a></td>
    <td>{{$post->description}}</td>
    <td>{{$post->price}}</td>
    <td>{{$post->pub_date}}</td>
  </tr>
  @endforeach
</table>

{{$posts->links()}}

@endsection
