@extends('layouts.default')
@section('content')
  @foreach($posts as $post)
    <div class="col-md-6">
      <div class="card mb-6 shadow-sm">
        <div class="card-body">
          <p class="card-text"><h1>{{ $post->getTitle() }}</h1>{!! Str::of($post->getBody())->limit(50) !!}</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
            <a href="{{ URL::action('PostsController@show', $post->getSlug()) }}" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
@stop
