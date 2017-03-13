<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TagController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tags = null;

        //This is in the case if the user use the searching bar
        if($request->filter != ""){
            $tags = Tag::where('name',"LIKE","%$request->filter%")->orderBy('updated_at','desc')->paginate(10);
        }
        else{
            $tags = Tag::orderBy('updated_at','desc')->paginate(10);
        }


        return view('admin.tag.index')->with([
            'tags' => $tags
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\TagRequest $request)
    {
        $tag = new Tag();
        $tag->fill($request->toArray());
        $tag->save();

        Session::flash('success', 'The tag was added');

        return redirect('admin/tags/create');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tag.edit')->with([
            'tag' => $tag
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\TagRequest $request, $id)
    {
        $tag =  Tag::findOrFail($id);
        $tag->fill($request->toArray());
        $tag->save();

        Session::flash('success', 'The tag was updated');

        return redirect('admin/tags/'.$id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        Session::flash('success', 'The tag '.$tag->name.' was deleted');

        return redirect('admin/tags');
    }
}
