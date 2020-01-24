<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $products = Product::all();
        $posts = Post::orderBy('pub_date', 'desc')->paginate(5);


        return view('post.list', ['posts' => $posts]);
    }

    public function home()
    {
        //
        // $products = Product::all();
        $posts = Post::orderBy('id', 'desc')->paginate(3);


        return view('home', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postData = $request->validate([
          'title' => 'required|min:3',
          'description' => 'required|min:10',
          'seriesA' => 'required|numeric|gt:0',
          'seriesB' => 'required|numeric|gt:0',
          'pub_date' => 'required|after_or_equal:today',
          'image' => 'required',
          'user' => 'required'
          ]
        );

        //gegevens in database opslaan

        $newFilename = $postData['image']->store('posts','public');
        $postData['image'] = $newFilename;

        $post = Post::create($postData);

        // return 'gelukt';
        return redirect()->route('Post.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);

        return view('post.details', ['post' => $post]);
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
