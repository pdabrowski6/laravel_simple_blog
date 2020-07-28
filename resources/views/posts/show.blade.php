@extends('layouts.default')
@section('content')
  <div class="col-md-12">
    <a href="{{ URL::action('PostsController@index')}}" class="btn btn-primary">Back to the list</a>
  </div>
  <div class="col-md-12 pt-5">
    <h1>{{ $post->getTitle() }}</h1>
    {!! $post->getBody() !!}
  </div>
@stop
