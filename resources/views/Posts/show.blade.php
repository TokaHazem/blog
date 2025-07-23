@extends('layouts.app')

@section('content')
{{-- @foreach ($posts as $post )
@if ($postid==$post['id']) --}}
@section('title') {{$post->title}} @endsection
<div class='container  mt-4'>
  <div class="card  mb-4">
  <div class="card-header">
    Post Creator Info
  </div>
  <div class="card-body  ">
    <h5 class="card-title">Title : {{$post->title}}</h5>
    <p class="card-text"> Posted By : {{$post->posted_by}} <br/> Created at : {{$post->created_at}}</p>
  </div>

</div> 
</div>
<div class='container  mt-4'>
  <div class="card  mb-4">
  <div class="card-header">
    Post Info
  </div>
  <div class="card-body  ">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->Description}}</p>
  </div>
</div> 
</div>
{{-- @endif
@endforeach --}}

@endsection


   