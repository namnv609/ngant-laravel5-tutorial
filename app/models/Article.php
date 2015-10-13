<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content'];

    public function category()
    {
        return $this->belongsTo(\App\model\Category::class);
    }
}
