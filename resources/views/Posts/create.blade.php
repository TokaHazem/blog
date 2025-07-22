@extends('layouts.app')
@section('title')
Creat Posts
@endsection
@section('content')
<div class='container  mt-4'>
    <form method="post" action="{{route('posts.store')}}">
        @csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Titel</label>
  <input name="title"   type="text" class="form-control" id="exampleFormControlInput1">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Describtion</label>
  <textarea name="Description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Creator Name</label>
  <input name="posted_by" type="text" class="form-control" id="exampleFormControlInput1">
</div>
<div class="mb-3">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  @foreach ($posts as $post )
  {{-- @for ($i=0 ; $i<count($post) ; $i++) --}}
  <input type="hidden" name='id' value='{{++$post['id']}}'>   
  {{-- @endfor  --}}
  @endforeach
  {{-- @dd($post); --}}
    


    <button type="submit" class="btn btn-success me-md-2">Submit</button>
 </div> 
</div>
</form>
</div>
@endsection
