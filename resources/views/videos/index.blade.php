@extends('layouts.master')

@section('title', 'Videos')

@section('content')
  <div>
      @foreach($videos as $video)
          <iframe width="560" height="315" src="{{$video->url}}" frameborder="0" allowfullscreen></iframe>
          @include('layouts/stars')
      @endforeach
  </div>
@endsection
