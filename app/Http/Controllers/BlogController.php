<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = blog::all();
        return view('allBlog', compact('blogs'));
    }

    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $this->validate($request, [
           'title'=>'required',
           'description'=>'required'
        ]);
        $blog = new blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->save();
        return redirect(route('blog'))->with('successMsg', 'Blog create successfully');
    }

    public function edit(Request $request, $id){
        $blog = blog::find($id);
        return view('edit', compact('blog'));

    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'title'=>'required',
            'description'=>'required'
        ]);
        $blog = blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->save();
        return redirect(route('blog'))->with('successMsg', 'Blog Update successfully');
    }
}
