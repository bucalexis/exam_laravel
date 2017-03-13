<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PublicController extends Controller
{

    /*
 * Checks if there is an user logged in
 */
    public function  __construct()
    {
        if(Auth::check() ){
            $this->middleware('guest');
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

        return view('public.post.index')->with([
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
        //This method is not used
        return redirect('404');
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
    public function show(Request $request)
    {
        $post = Post::findOrFail($request->id);

        //If the slug is incorrect, it throws an error 404
        if ($post->slug != $request->slug){
            return redirect('404');
        }

        return view('public.post.post_info')->with([
            'post' => $post
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //This method is not used
        return redirect('404');
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
