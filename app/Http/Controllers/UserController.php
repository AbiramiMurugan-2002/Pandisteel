<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Blogdescription;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $blogs = Blog::with(['descriptions' => function($query) {
            $query->orderBy('priority');
        }])->get();

        return view('blog-index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::with(['descriptions' => function($query) {
            $query->orderBy('priority');
        }])->findOrFail($id);

        return view('blog', compact('blog'));
    }   
}
