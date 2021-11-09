<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\storePostRequests;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Post::orderBy('id','desc')->get();
       return view('home',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storePostRequests $request)
    {
        // $request->validate([
        //     'name' => 'required|max:255',
        //     'description' => 'required',
        // ]);
        // $data=new Post();
        // $data->name = $request->name;
        // $data->description = $request->description;
        // $data->save();
        Post::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $post=Post::findorFail($id);
        dd($post->categories->name);
        return view('show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // $post=Post::findOrFail($id);
        return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(storePostRequests $request, Post $post)
    {
        // $post=Post::findorFail($id);
        // $request->validate([
        //     'name' => 'required|max:255',
        //     'description' => 'required',
        // ]);
        // $post->name=$request->name;
        // $post->description=$request->description;
        // $post->save();
        $post->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Post::findorFail($id)->delete();
       return redirect('/posts');

    }
}
