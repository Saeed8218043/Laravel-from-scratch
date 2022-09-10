<?php

namespace App\Models;

use http\Message\Body;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['category', 'author'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, array $filter)
    {
        $query->when($filter['search'] ?? false, fn($query, $search)=>
             $query->where(fn($query)=>
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
        ));

        $query->when($filter['category'] ?? false, fn($query, $category)=>
            $query->whereHas('category', fn($query)=>
                 $query->where('slug', $category)
            ));

        $query->when($filter['author'] ?? false, fn($query, $author)=>
            $query->whereHas('author', fn($query)=>
                 $query->where('username', $author)
            ));

    }

    public function comments()
    {
        return $this->hasMany(Comment::class,);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

