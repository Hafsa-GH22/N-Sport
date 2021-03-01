<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'text',
        'author',
        'category_id',
    ];

    protected $appends = array('views');

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function views()
    {
        return $this->hasMany(View::class);
    }

    public function getViewCountAttribute()
    {
        return count($this->views()->get());
    }
}
