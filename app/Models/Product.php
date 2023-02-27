<?php

namespace App\Models;
use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'img',
        'user_id',
        'category_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function getFormattedTags(){
        $tags = '';
        foreach ($this->tags as $tag) {
            $tags .= '#' . $tag->name . '';
        }
        return $tags;
    }
}