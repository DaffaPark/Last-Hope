<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Comment;

class Posts extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
    	'kategori_id',
        'name',
        'slug',
        'desc',
        'yt_iframe',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'status',
        'created_by'
    ];

    public function kategori()
    {
    	return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by','id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

}
