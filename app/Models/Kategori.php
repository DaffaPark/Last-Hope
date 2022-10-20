<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posts;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

     protected $fillable = [
        'name',
        'slug',
        'desc',
        'image',
        'meta_title',
        'meta_descs',
        'meta_keyword',
        'navbar_status',
        'status',
        'created_by'
    ]; 
    public function post()
    {
        return $this->hasMany(Posts::class, 'kategori_id', 'id');
    }
}
