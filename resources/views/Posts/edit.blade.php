@extends('layouts.app')

@section('content')
@foreach ($posts as $post )
@if ($postid==$post['id'])
@section('title') Edit {{$post['title']}} @endsection
<div class='container  mt-4'>
    <form method="POST" action="{{route('posts.update',$postid)}}">
        @csrf
        @method('PUT')
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Titel</label>
  <input name="title"   type="text" class="form-control" id="exampleFormControlInput1" value="{{$post['title']}}">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Describtion</label>
  <textarea name="Description" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$post['Description']}}</textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Creator Name</label>
  <input name="posted_by" type="text" class="form-control" id="exampleFormControlInput1" value="{{$post['posted_by']}}" >
</div>
<div class="mb-3">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <input type="hidden" name='id' value='{{$post['id']}}'>
    <button type="submit" class="btn btn-primary me-md-2">Update</button>
 </div> 
</div>
</form>
</div>


@endif
@endforeach

@endsection
