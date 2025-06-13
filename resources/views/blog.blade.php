<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        @php
            $titleSection = $blog->descriptions->firstWhere('type', 'heading');
        @endphp
        {{ $titleSection ? $titleSection->content : 'Blog' }}
    </title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        p {
            font-size:18px;
        }
        img {
            max-width: 100%; /* Responsive images */
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        @php
            $titleSection = $blog->descriptions->firstWhere('type', 'heading');
            $skippedFirstHeading = false;
        @endphp

        <h1 class="h2 fw-bold mb-3 text-center">
            {{ $titleSection ? $titleSection->content : 'Blog' }}
        </h1>

        @foreach ($blog->descriptions->sortBy('priority') as $section)
            @if ($section->type === 'heading')
                @if (!$skippedFirstHeading)
=======
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
            @php
            $titleSection = $blog->descriptions->firstWhere('type', 'heading');
            @endphp
            {{ $titleSection ? $titleSection->content : 'Blog' }}
        </title>
        <!-- Bootstrap CSS CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
        <style>
            p {
            font-size:18px;
            }
            img {
            max-width: 100%; /* Responsive images */
            height: auto;
            }
        </style>
    </head>
    <body>
        <div class="container my-5">
            @php
                $sorted = $blog->descriptions->sortBy('priority')->values();
                $titleSection = $blog->descriptions->firstWhere('type', 'heading');
                $skippedFirstHeading = false;
                $imageAlts = $sorted->where('type', 'AltText')->values();
                $imageIndex = 0;
            @endphp
            <h1 class="h2 fw-bold mb-3 text-center">
            {{ $titleSection ? $titleSection->content : 'Blog' }}
            </h1>
            @foreach ($blog->descriptions->sortBy('priority') as $section)
                @if ($section->type === 'heading')
                    @if (!$skippedFirstHeading)
>>>>>>> blog-updation
                    @php $skippedFirstHeading = true; @endphp
                    @continue
                @endif
                <h2 class="mb-3 fw-normal mt-5">{!! $section->content !!}</h2>
<<<<<<< HEAD
            @elseif ($section->type === 'paragraph')
                <p class="mb-3 mt-4">{!! $section->content !!}</p>
            @elseif ($section->type === 'image')
                <img src="{{asset($section->content)}}" class="img fluid d-block mx-auto mt-4" alt="{{ $titleSection ? $titleSection->content : 'Blog Image' }}"/>
            @endif
        @endforeach
    </div>

    <!-- Bootstrap JS Bundle with Popper (optional, only if you need JS components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
=======
                @elseif ($section->type === 'paragraph')
                    <p class="mb-3 mt-4">{!! $section->content !!}</p>
                @elseif ($section->type === 'image')
                    @php
                        $altText = $imageAlts->get($imageIndex);
                        $imageIndex++;
                    @endphp
                    <img src="{{ asset($section->content) }}" class="img-fluid d-block mx-auto mt-4" alt="{{ $altText ? $altText->content : 'Blog Image' }}" />
                @endif
            @endforeach
        </div>
    <!-- Bootstrap JS Bundle with Popper (optional, only if you need JS components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
>>>>>>> blog-updation
