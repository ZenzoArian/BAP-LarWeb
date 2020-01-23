@extends('layouts.app')

@section('header')
<h2>All posts</h2>
<h2>{{ Auth::user()->name }}</h2>
@endsection

@section('content')
<div class="master-post-container">

  @foreach($posts as $post)
  <div class="sub-post-con">

    <div class="post-title-con">
      <h2><a href="{{route('Post.detail', ['id' => $post->id]) }}">{{$post->title}}</a></h2>
    </div>

    <div class="post-des-con">
      <p>{{$post->description}}</p>
    </div>

    <div class="post-date-con">
      <p>{{$post->pub_date}}</p>
    </div>

    <td>{{$post->price}}</td>

  </div>

  @endforeach
</div>

<div class="paginate-con">
{{$posts->links()}}
</div>

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
