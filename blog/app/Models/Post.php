<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['author', 'category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function setPasswordAttribute($password)
    {
        $this->attribute['password'] = bycrpt($password);
    }

    public function getUsernameAttribute($username)
    {
        return ucwords($username);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query
                ->where(function ($query) use ($search) {
                    $query
                        ->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');
                });

        });

        $query->when($filters['category'] ?? false, function ($query, $category_slug) {
            $query
                ->whereHas('category', function ($query) use ($category_slug) {
                    return $query->where('slug', $category_slug);
                });
        });

        $query->when($filters['author'] ?? false, function ($query, $author_username) {
            $query
                ->whereHas('author', function ($query) use ($author_username) {
                    return $query->where('username', $author_username);
                });
        });
    }

}
