<?php

namespace App\Observers;
use Illuminate\Support\Str;
use App\Models\Blog;

class BlogObserver
{
    public function creating(Blog $blog):void
    {
        do {
            $code = strtolower(Str::random(config('common.code_length')));
        } while (Blog::where('code', $code)->exists());

        $blog->code = $code;
    }
    public function created(Blog $blog): void
    {
        
    }

    /**
     * Handle the Blog "updated" event.
     */
    public function updated(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "deleted" event.
     */
    public function deleted(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "restored" event.
     */
    public function restored(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "force deleted" event.
     */
    public function forceDeleted(Blog $blog): void
    {
        //
    }
}
