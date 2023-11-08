<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'category',
        'slug',
        'content',
        'user_id'
    ];
    
    public function searchableAs()
    {
        return 'posts_index';
    }

    public function toSearchableArray()
    {
        return [
            'title'     => $this->title,
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
