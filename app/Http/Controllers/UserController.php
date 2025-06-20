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

<<<<<<< HEAD
    public function show($id)
    {
        $blog = Blog::with(['descriptions' => function($query) {
            $query->orderBy('priority');
        }])->findOrFail($id);

        return view('blog', compact('blog'));
    }   
=======
    public function show($code)
    {
        $blog = Blog::with(['descriptions' => function ($query) {
            $query->orderBy('priority');
        }])->where('code', $code)->firstOrFail();

        return view('blog', compact('blog'));
    }

>>>>>>> blog-updation
}
