@extends('layouts.app')
@section('title') Index @endsection
@section('content')
<div class='container text-center mt-4'>
    <a href="{{route('posts.create')}}" class="btn btn-success">Create Posts</a>

    <table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posted by</th>
      <th scope="col">Created at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post )
    
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->posted_by}}</td>
      <td>{{$post->created_at}}</td>
      <td> <a href="{{route('posts.show',$post['id'])}}" class="btn btn-info">View</a>
           <a href='{{route('posts.edit',$post['id'])}}' class="btn btn-primary">Edit</a>
           <form method="post" action="{{route('posts.destroy',$post['id'])}}" style="display: inline">
            @csrf
           @method('delete')
            <button type="submit" class="btn btn-danger" onclick="confirmAction()">Delete</button>
    
           </form>
           
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>

<script>
function confirmAction() {
    if (confirm("Do you want to Delete?")) {
       
        alert(Deleted);
        
    } else {
        
        alert(Canceled);
    }
}
</script>
@endsection

   