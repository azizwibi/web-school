<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\category;


class PostController extends Controller
{
    public function index()
    {
        return view('posts',[
            "title" =>"All posts",
            "posts" => post::latest()->filter(request(['search']))
            ->paginate(7)->withQueryString()
        ]);
    }


    public function show(post $post)
    {
       return view('post',[
        "title" =>"single post",
        "post" =>$post
       ]);
    }
    public function categorys(category $category)
    {
        return view('posts',[
            "title" =>"post By category : $category->name",
            "posts"=>$category->posts
        ]);
    }

}
