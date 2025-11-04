@extends('layouts.app')

@section('content')


@section('title') Edit  @endsection
<div class='container  mt-4'>
    <form method="POST" action="{{route('posts.update',$post->id)}}">
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
 <select class="form-select" aria-label="Default select example" name="posted_by">
 @foreach ($Users as $user)
 <option @selected ($user->id == $post->user_id) value="{{$user->id}}">{{$user->name}}</option>
 @endforeach
  
  
</select>
</div>
<div class="mb-3">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <input type="hidden" name='id' value='{{$post['id']}}'>
    <button type="submit" class="btn btn-primary me-md-2">Update</button>
 </div> 
</div>
</form>
</div>



@endsection
