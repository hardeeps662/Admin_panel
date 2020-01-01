<?php

namespace App\Http\Controllers;
use Auth;
use App\Post;
use App\Category;
use Input;
use Illuminate\Http\Request;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view ('post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $category=Category::all(); 

        return view ('post.create',compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $post=new Post;
     $post->user_id=Auth::user()->id; 
     $post->title=$request->input('title');
     $post->detail=$request->input('detail');
     $post->category_id=$request->input('category_id');

   if ($request->hasfile('post_img')) {

    $filename=$request->file('post_img')->getClientOriginalName();

    $request->file('post_img')->storeAs('public/upload',$filename);
   }

    $post->post_image=$filename;
    $post->save();
    return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $category=Category::all(); 
        $post=Post::find($id);
        return view ('post.show',compact('post','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $category=Category::all();
            $post=post::find($id);

            $Category=Category::find($post->category_id);

         return view ('post.edit',compact('post','category','Category'));       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

          $Post=Post::find($id);
         
          $Post->update($request->all());
           return back();

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
