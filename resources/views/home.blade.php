@extends('layouts.app')

@section('header')
<h2>The latest posts.</h2>
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

    <div class="post-user-con">
      <p>-{{$post->user}}</p>
    </div>

    <td>{{$post->price}}</td>

  </div>

  @endforeach
</div>
<div class="center">
<a class="btn btn-primary left" href="{{route('post.add')}}">Add post</a>
<a class="btn btn-primary right" href="{{route('Post.list')}}">All posts</a>
</div>


@endsection
