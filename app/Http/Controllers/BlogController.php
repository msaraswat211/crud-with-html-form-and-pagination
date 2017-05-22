<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs=Blog::all()->paginate(15);
        return view('index', ['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $this->validate($request,[
         'title'=>'required',
         'content'=>'required',
            ]);
        //create new data
        $blog=new Blog;
        $blog->title=$request->title;
        $blog->content=$request->content;
        $blog->save();
        return redirect()->route('blog.index')->with('alert-success','Data has been Saved!');
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
        //edit record
        $blog=Blog::findOrFail($id);
        return view('edit', compact('blog', $blog));
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
        //update record
        $blog=Blog::findOrFail($id);
        $blog->title=$request->title;
        $blog->content=$request->content;
        $blog->save();
        return redirect()->route('blog.index')->with('alert-success','Data has been Saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //delete data
        $blog= Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blog.index')->with('alert-success','Data has been Saved!');
    }
}
