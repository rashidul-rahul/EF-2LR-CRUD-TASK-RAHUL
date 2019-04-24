<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('allBlog');
    }

    public function create(){
        return view('create');
    }
}
