<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{

    /*
     * Checks if there is an user logged in
     */
    public function  __construct()
    {
        if(!Auth::check() ){
            $this->middleware('auth');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request Receives and optional request with a filter for the title of the posts
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = null;

        //This is in the case if the user use the searching bar
        if($request->filter != ""){
            $posts = Post::where('title',"LIKE","%$request->filter%")->orderBy('updated_at','desc')->paginate(10);
        }
        else{
            $posts = Post::orderBy('updated_at','desc')->paginate(10);
        }

        return view('admin.post.index')->with([
            'posts' => $posts
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.post.create')->with([
            'tags' => $tags

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PostRequest $request)
    {
        $post = new Post();
        $slug= str_slug($request->title,'-');
        $data = $request->toArray();
        $data['slug'] = $slug;
        $post->fill($data);
        $post->user()->associate(Auth::user());
        $post->save();
        $post->tags()->sync($request->tags);

        Session::flash('success', 'The post was added');

        return redirect('admin/posts/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //This method is not used
        return redirect('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =  Post::findOrFail($id);
        $tags = Tag::all();
        $selectedTags = $post->tags;

        //It is needed to know which tags mark as not selected
        $diff = $tags->diff($selectedTags);

        return view('admin.post.edit')->with([
            'selectedTags' => $selectedTags,
            'noSelectedTags'=> $diff,
            'post'=>$post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PostRequest $request, $id)
    {
        $post =  Post::findOrFail($id);
        $slug= str_slug($request->title,'-');
        $data = $request->toArray();
        $data['slug'] = $slug;
        $post->fill($data);
        $post->save();
        $post->tags()->sync($request->tags);

        Session::flash('success', 'The post was updated');

        return redirect('admin/posts/'.$id.'/edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::findOrFail($id);
        $post->tags()->sync(array());
        $post->delete();
        Session::flash('success', 'The post '.$post->title.' was deleted');

        return redirect('admin/posts');
    }
}
