<?php

namespace App\Models;

use App\Models\Like;
use App\Models\User;
use App\Models\Error;
use App\Models\Review;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'poster',
        'foto',
        'yyl',
        'location',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function likes() {
        return $this->hasMany(Like::class);
    }
    public function errors() {
        return $this->hasMany(Error::class);
    }
    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
