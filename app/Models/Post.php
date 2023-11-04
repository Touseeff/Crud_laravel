<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table  = 'posts';
    protected $fillable  = [
        'post_title',
        'post_description',
        'post_image',
        'created_at',
        'updated_at'
    ];
    // protected $primaryKey = 'id';

    use HasFactory;
}
