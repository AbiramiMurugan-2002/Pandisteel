<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogdescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_id',
        'type',
        'content',
        'priority',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
}
