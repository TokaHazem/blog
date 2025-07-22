<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
 protected $allposts=[
            ['id'=> '1' , 'title'=>'Html' , 'posted_by'=>'Ahmed' , 'created_at'=> '2023-5-6' , 'Description'=>'This is a Html'],
           ['id'=> '2' , 'title'=>'CSS' , 'posted_by'=>'Mona' , 'created_at'=> '2023-5-8', 'Description'=>'This is a CSS'],
            ['id'=> '3' , 'title'=>'JavaScript' , 'posted_by'=>'Samir' , 'created_at'=> '2023-12-6', 'Description'=>'This is a JavaScript'],
            ['id'=> '4' , 'title'=>'PHP' , 'posted_by'=>'Asmaa' , 'created_at'=> '2024-5-6', 'Description'=>'This is a PHP']      
        ];

    public function index(){
   
        return view('Posts.index',['posts'=>$this->allposts]);
    }
      
    public function show($PostId)
    {
        return view('posts.show',['posts'=>$this->allposts,'postid'=>$PostId]);
    }

    public function create(){
        return view('posts.create',['posts'=>$this->allposts]);
    }
    public function store(){
        $data=request()->all();
        $title = request()->title;
        $description = request()->Description;
        $postCreator = request()->posted_by;
 
        return to_route('posts.index');
    }

    public function edit($PostId){
       
       return view('posts.edit',['posts'=>$this->allposts,'postid'=>$PostId]);
    }

    public function update($PostId){
       

        $title = request()->title;
        $description = request()->Description;
        $postCreator = request()->posted_by;
        
        
        return to_route('posts.show',$PostId);
    }

    public function  destroy(){
        
        return to_route('posts.index');
    }
}