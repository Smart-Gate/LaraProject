<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use App\Post;

class PostsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')->with('catagory',Catagory::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this ->validate($request,[
            "title" => "required",
  "content" => "required",
  "catagory_id" => "required",
  "feutured" => "required|image"
  
        ]);
        $feutured = $request->feutured;
        $featuresNewName = time().$feutured->getClientOriginalName();
        $feutured->move('uploads/posts',$featuresNewName);

        $post = Post::create(["title" => $request->title,
        "content" => $request->content,
        "catagory_id" => $request->catagory_id,
        "feutured" => 'uploads/posts/'.$featuresNewName,
        "slug" => str_slug($request->title)
        ]);
        // dd($request->all());
        return redirect()->back();
        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('posts.index')->with('catagories',Post::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $post = Post::find($id);
        $post->delete();
         return redirect()->back();
    }
    public function trashed()
    {
        
        return view('posts.deleted')->with('posts',Post::onlyTrashed()->get());
    }
    public function hdelete($id)
    {
        
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->forceDelete();
         return redirect()->back();
    }
    public function restore($id)
    {
        
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->restore();
         return redirect()->route('posts');
    }
    
}
