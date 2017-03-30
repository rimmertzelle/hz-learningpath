@extends('layouts.master')

@section('title')
  {{ $video->title }}
@endsection
@section('content')
  <div>
    <h1>{{ $video->title }}</h1>
    <iframe width="560" height="315" src="{{$video->url}}" frameborder="0" allowfullscreen></iframe>
  </div>
@endsection
