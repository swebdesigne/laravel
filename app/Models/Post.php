<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

//    protected $table = 'my_posts';
//    protected $primaryKey = 'post_id';
//    public $incrementing = false;
//    public $keyType = 'string';
//    public $timestamps = false;
    public $attributes = [
        'content' => "Lorem ipsum..."
    ];
}
