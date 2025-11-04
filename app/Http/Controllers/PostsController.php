<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Console\View\Components\Alert;
use App\Models\User;
class PostsController extends Controller
{
protected $allposts=[
            ['id'=> '1' , 'title'=>'Html' , 'posted_by'=>'Ahmed' , 'created_at'=> '2023-5-6' , 'Description'=>'This is a Html'],
           ['id'=> '2' , 'title'=>'CSS' , 'posted_by'=>'Mona' , 'created_at'=> '2023-5-8', 'Description'=>'This is a CSS'],
            ['id'=> '3' , 'title'=>'JavaScript' , 'posted_by'=>'Samir' , 'created_at'=> '2023-12-6', 'Description'=>'This is a JavaScript'],
            ['id'=> '4' , 'title'=>'PHP' , 'posted_by'=>'Asmaa' , 'created_at'=> '2024-5-6', 'Description'=>'This is a PHP']      
        ]; 

    public function index(){
      $AllPostsFromDB= Post::all();
     
        return view('Posts.index',['posts'=>$AllPostsFromDB]);
    }
      
    public function show(Post $post)
    {
       /*  $SinglePostFromDB= Post::find($PostId);
        
       if (is_null($SinglePostFromDB)) {
    echo "<script>
        alert('The Id= " . $PostId . " is not FOUND. You will be redirected to the Home Page.');
        window.location.href = '" . route('posts.index') . "';
        </script>";
    exit; } */
        return view('posts.show',['post'=> $post]);
    }

    public function create(){
     $Users=User::all();
        return view('posts.create',['Users'=>$Users]);
    }
    public function store(){

       request()->validate([
    'title' => ['required', 'min:3'],
    'Description' => ['required', 'min:5'],
    'posted_by'=>['required','exists:users,id'],
]);

        $data=request()->all();
        $title = request()->title;
        $description = request()->Description;
        $postCreator = request()->posted_by;
       
        Post::create([
            'title'=> $title,
            'Description'=>$description,
            'user_id'=>$postCreator,

        ]);
 
        return to_route('posts.index');
    }

    public function edit(Post $post){
       $Users=User::all();
       return view('posts.edit',['Users'=>$Users,'post'=> $post]);
    }

    public function update($PostId){
       

        $title = request()->title;
        $description = request()->Description;
        $postCreator = request()->posted_by;
        
        $SinglePostFromDB= Post::find($PostId);
        $SinglePostFromDB->update([
            'title'=> $title,
            'Description'=>$description,
             'user_id'=>$postCreator,
        ] );
        return to_route('posts.show',$PostId);
    }

    public function  destroy($PostId){
       $post=post::find($PostId);
       $post ->delete();
        return to_route('posts.index');
    }
}