<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $blogs = blog::orderBy('created_at')->paginate(5);
        return view('welcome', compact('blogs'));
    }
}
