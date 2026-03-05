<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;

class Post extends Model {
    use HasFactory;
    
    protected $with = ['author', 'category'];
    protected $fillable = ['title','author','slug','body'];

    public function author() {
        return $this->belongsTo(User::class, 'author_id');  
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters) : void{
            $query->when(
                $filters['search'] ?? false,
                fn(Builder $query, string $search) => $query->where('title', 'like', '%' . $search . '%')
            );

            $query->when(
                $filters['category'] ?? false,
                fn(Builder $query, string $category) => $query->whereHas(
                    'category',
                    fn(Builder $query) => $query->where('slug', $category)
                )
            );
        }
    }


 