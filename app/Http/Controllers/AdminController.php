<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Blogdescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{   
    public function viewadmin(){
        $blogCount = Blog::count(); 
        return view('admin-dashboard', compact('blogCount'));
    }

    public function create()
    {
        return view('form');
    }

<<<<<<< HEAD
    public function show($id)
    {
        $blog = Blog::with(['descriptions' => function($query) {
            $query->orderBy('priority');
        }])->findOrFail($id);
=======
    public function show($code)
    {
        $blog = Blog::with(['descriptions' => function($query) {
            $query->orderBy('priority');
        }])->where('code', $code)->firstOrFail();
>>>>>>> blog-updation

        return view('blog', compact('blog'));
    }

    public function index()
    {
        $blogs = Blog::with(['descriptions' => function($query) {
            $query->orderBy('priority');
        }])->get();

        return view('blog-index', compact('blogs'));
    }

    public function store(Request $request)
    {   
        $validated = $request->validate([
            'descriptions' => 'required|array',
            'descriptions.*.type' => 'required|string|in:heading,paragraph,image',
            'descriptions.*.content' => 'required_without:descriptions.*.image_file|string|nullable',
            'descriptions.*.image_file' => 'nullable|image',
            'descriptions.*.priority' => 'required|integer',
        ]);

        $blog = Blog::create([
            'is_published' => $request->boolean('is_published', false),
        ]);

        foreach ($validated['descriptions'] as $index => $descData) {
            $content = $descData['content'] ?? null;

            if ($descData['type'] === 'image' && $request->hasFile("descriptions.$index.image_file")) {
                $file = $request->file("descriptions.$index.image_file");
                if ($file && $file->isValid()) {
                    $path = $file->store('blogimages', 'public');
                    if ($path) {
                        $content = 'storage/' . $path;
                    } else {
                        // If storing failed, skip this image
                        continue;
                    }
                } else {
                    // If file is not valid, skip this image
                    continue;
                }
            } elseif ($descData['type'] === 'image') {
                // No file uploaded, skip this description
                continue;
            }

            $blog->descriptions()->create([
                'type' => $descData['type'],
                'content' => $content,
                'priority' => $descData['priority'],
            ]);
        }

        return redirect()->route('blogindex');
    }
    
<<<<<<< HEAD
    public function edit($id)
    {
        $blog = Blog::with(['descriptions' => function($query) {
            $query->orderBy('priority');
        }])->findOrFail($id);
=======
    public function edit($code)
    {
        $blog = Blog::with(['descriptions' => function($query) {
            $query->orderBy('priority');
        }])->where('code', $code)->firstOrFail();
>>>>>>> blog-updation

        return view('edit', compact('blog'));
    }

<<<<<<< HEAD
=======

>>>>>>> blog-updation
    // public function update(Request $request, $id)
    // {
    //     $validated = $request->validate([
    //         'descriptions' => 'required|array',
    //         'descriptions.*.type' => 'required|string|in:heading,paragraph,image',
    //         'descriptions.*.content' => 'required_without:descriptions.*.image_file|string|nullable',
    //         'descriptions.*.image_file' => 'nullable|image|max:2048',
    //         'descriptions.*.priority' => 'required|integer',
    //     ]);

    //     $blog = Blog::findOrFail($id);
    //     $blog->update([
    //         'is_published' => $request->boolean('is_published', false),
    //     ]);
    //     $blog->descriptions()->delete();
    //     foreach ($validated['descriptions'] as $index => $descData) {
    //         $content = $descData['content'] ?? null;

    //         if ($descData['type'] === 'image' && $request->hasFile("descriptions.$index.image_file")) {
    //             $file = $request->file("descriptions.$index.image_file");
    //             if ($file && $file->isValid()) {
    //                 $path = $file->store('blogimages', 'public');
    //                 if ($path) {
    //                     $content = 'storage/' . $path;
    //                 } else {
    //                     continue;
    //                 }
    //             } else {
    //                 continue;
    //             }
    //         } elseif ($descData['type'] === 'image') {
    //             continue;
    //         }

    //         $blog->descriptions()->create([
    //             'type' => $descData['type'],
    //             'content' => $content,
    //             'priority' => $descData['priority'],
    //         ]);
    //     }

    //     return redirect()->route('blogindex');
    // }
    
    
<<<<<<< HEAD
    public function update(Request $request, $id)
=======
    public function update(Request $request, $code)
>>>>>>> blog-updation
    {
        $validated = $request->validate([
            'descriptions' => 'required|array',
            'descriptions.*.type' => 'required|string|in:heading,paragraph,image',
            'descriptions.*.content' => 'required_without:descriptions.*.image_file|string|nullable',
            'descriptions.*.image_file' => 'nullable|image|max:2048',
            'descriptions.*.priority' => 'required|integer',
        ]);

<<<<<<< HEAD
        $blog = Blog::findOrFail($id);
=======
        // Find blog by code instead of id
        $blog = Blog::where('code', $code)->firstOrFail();
>>>>>>> blog-updation

        $blog->update([
            'is_published' => $request->boolean('is_published', false),
        ]);

        // Delete old descriptions
        $blog->descriptions()->delete();

        // Store new descriptions
        foreach ($validated['descriptions'] as $index => $descData) {
            $content = $descData['content'] ?? null;

            if ($descData['type'] === 'image') {
                if ($request->hasFile("descriptions.$index.image_file")) {
                    $file = $request->file("descriptions.$index.image_file");
                    if ($file && $file->isValid()) {
                        $path = $file->store('blogimages', 'public');
                        if ($path) {
                            $content = 'storage/' . $path;
                        } else {
                            continue; // Skip invalid image upload
                        }
                    } else {
                        continue; // Skip if file is not valid
                    }
                }

                // If no new file, but old content (path) is there, use it
                if (!$content) {
                    continue; // Skip if there's no content or uploaded image
                }
            }

            $blog->descriptions()->create([
                'type' => $descData['type'],
                'content' => $content,
                'priority' => $descData['priority'],
            ]);
        }

        return redirect()->route('blogindex');
    }

<<<<<<< HEAD
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
=======

    public function destroy($code)
    {
        $blog = Blog::where('code', $code)->firstOrFail();
>>>>>>> blog-updation
        $blog->delete();
        return redirect()->route('blogindex');
    }
}
