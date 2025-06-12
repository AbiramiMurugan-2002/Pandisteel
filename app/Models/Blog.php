<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'is_published',
        'code', 
    ];
    protected $casts = [
        'is_published' => 'boolean',
    ];
    public function descriptions()
    {
        return $this->hasMany(Blogdescription::class)->orderBy('priority');
    }
}
