<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $allposts=[
            ['id'=> '1' , 'title'=>'Html' , 'posted_by'=>'Ahmed' , 'created_at'=> '2023-5-6'],
           ['id'=> '2' , 'title'=>'CSS' , 'posted_by'=>'Mona' , 'created_at'=> '2023-5-8'],
            ['id'=> '3' , 'title'=>'JavaScript' , 'posted_by'=>'Samir' , 'created_at'=> '2023-12-6'],
            ['id'=> '4' , 'title'=>'PHP' , 'posted_by'=>'Asmaa' , 'created_at'=> '2024-5-6']      
        ];
       
        return view('Posts.index',['posts'=>$allposts]);
    }
}
