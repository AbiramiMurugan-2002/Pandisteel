<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <title>All Blogs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
    <h2 class="mb-4 text-center">All Blogs</h2>
    
    <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-md-4 mb-4">
                <a href="{{ route('showblog', $blog->id) }}" class="text-decoration-none text-dark">
                    <div class="card h-100 shadow-sm border-0">
                        @php
                            $firstImage = $blog->descriptions->firstWhere('type', 'image');
                            $titleSection = $blog->descriptions->firstWhere('type', 'heading');
                        @endphp

                        @if($firstImage)
                            <img src="{{ asset($firstImage->content) }}" class="card-img-top rounded-top-4 img-fluid" alt="{{ $titleSection ? $titleSection->content : 'Blog Image' }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $titleSection ? $titleSection->content : 'No Title' }}</h5>
                            <div class="d-flex justify-content-center gap-2 mt-2">
                                @if(Route::currentRouteName() === 'blogindex')
                                    <a href="{{ route('blog-edit', $blog->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('blog-delete', $blog->id) }}" method="POST" onsubmit="return confirm('Delete this blog?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

=======
    <head>
        <meta charset="UTF-8">
        <title>All Blogs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container py-5">
        <h2 class="mb-4 text-center">All Blogs</h2>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-md-4 mb-4">
                    <a href="{{ route('showblog', $blog->code) }}" class="text-decoration-none text-dark">
                        <div class="card h-100 shadow-sm border-0">
                            @php
                                $firstImage = $blog->descriptions->firstWhere('type', 'image');
                                $titleSection = $blog->descriptions->firstWhere('type', 'heading');
                                $imageAlt=$blog->descriptions->where('type', 'AltText')->first();
                            @endphp
                            @if($firstImage)
                                <img src="{{ asset($firstImage->content) }}" class="card-img-top rounded-top-4 img-fluid" alt="{{$imageAlt->content ?? 'Blog Image'}}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title text-center">{{$titleSection->content}}</h5>
                                <div class="d-flex justify-content-center gap-2 mt-2">
                                    @if(Route::currentRouteName() === 'blogindex')
                                        <a href="{{ route('blog-edit', $blog->code) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('blog-delete', $blog->code) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog?');" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
>>>>>>> blog-updation
    @if($blogs->isEmpty())
        <div class="text-center">
            <p>No blogs available.</p>
        </div>
    @endif
    @if(Route::currentRouteName() === 'blogindex')
        <div class="text-center mt-4">
<<<<<<< HEAD
            <a href="{{ route('form') }}" class="btn btn-success btn-lg">Create Blog</a>
        </div>
    @endif
</div>

<!-- Bootstrap JS (optional if needed) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
=======
            <a href="{{ route('form') }}" class="btn btn-success btn-lg">create Blog</a>
        </div>
    @endif
    <!-- Bootstrap JS (optional if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
>>>>>>> blog-updation
