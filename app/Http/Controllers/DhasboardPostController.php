<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\support\str;

class DhasboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('dhasboard.posts.index',[
            'posts'=>post::where('user_id', auth()->user()->id)->get()
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dhasboard.posts.create',[
            'categories' => category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'unique:posts',
            'category_id' => 'required',
            'body'=> 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = str::limit(strip_tags($request->body), 200);

        post::create($validatedData);
        return redirect('/dhasboard/posts')->with('success', 'post berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        if($post->author->id !== auth()->user()->id) {
            abort(403);
       }
        //  return $post;
         return view('dhasboard.posts.show',[
         'post'=>$post
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        if($post->author->id !== auth()->user()->id) {
            abort(403);
       }
        return view('dhasboard.posts.edit',[
            'post' => $post,
            'categories' => category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'unique:posts',
            'category_id' => 'required',
            'body'=> 'required'
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = str::limit(strip_tags($request->body), 200);

        post::where('id', $post->id)
            ->update($validatedData);
        return redirect('/dhasboard/posts')->with('success', 'post berhasil diupdated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        post::destroy($post->id);
        return redirect('/dhasboard/posts')->with('success', 'post berhasil dihapus!');
    }
public function cekSlug(Request $request)
{
    $Slug = SlugService::createSlug(Post::class, 'Slug', $request->title);
    return response()->json(['Slug' => $Slug]);
}


}
