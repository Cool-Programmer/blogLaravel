<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;

use App\Post;

use App\Category;

class PostController extends Controller
{


    // Middleware to restrict access
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|min:5|max:250',
            'slug'=>'required|alpha_dash|min:5|max:250|unique:posts',
            'body'=>'required|min:10'
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->slug  = $request->slug;
        $post->category_id = $request->category_id;
        $post->body  = $request->body;
        
        
        $post->save();
        Session::flash('success', 'Post successfully created!');
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post', 'categories'));
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
        $input = $request->all();
        $post = Post::find($id);
        if ($request->$input['slug'] = $post->slug) {
            $this->validate($request, [
                'title'=>'required|min:5|max:250',
                'body'=>'required|min:10'
            ]);
        }else {
            $this->validate($request, [
                'title'=>'required|min:5|max:250',
                'slug'=>'required|alpha_dash|min:5|max:250|unique:posts, slug',
                'body'=>'required|min:10'
            ]);
        }
       
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->slug  = $request->slug; 
        $post->category_id  = $request->category_id; 
        $post->body  = $request->body;
        $post->save();
        Session::flash('success', 'Post successfully updated!');
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        Session::flash('success', 'Post successfully deleted!');
        return redirect(route('posts.index'));
    }
}
