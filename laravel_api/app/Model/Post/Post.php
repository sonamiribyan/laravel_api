<?php

namespace App\Model\Post;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name','description','image'];
}
