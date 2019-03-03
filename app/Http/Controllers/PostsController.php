<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
//use DB if you don't want to use Eloquent

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Post::all(); eloquent to return all, returns an array
        $posts = Post::all();
        return view('posts.index', compact('posts'));

        //return view ('posts.index')->with('posts', $posts); another option

        //order by something

        //$posts = Post::orderBy('title', 'asc')->get();
        //$posts = Post::orderBy('title', 'asc')->take(1)->get(); picks only one
        //$posts = Post::orderBy('title', 'asc')->paginate(2);
        //$posts = Post::orderBy('title', 'asc')->paginate(5)->get(); shows five per page

        //choose only some
        //$posts = Post::where('title', 'Post Two')->get();

        //using DB and raw sql
        //$post = DB::select('SELECT * FROM posts')

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        //put it into a variable = (model name):: find(variable you want to fetch)
        return view ('posts.detail')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
