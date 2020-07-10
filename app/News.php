<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    protected $fillable = [
        'title', 'body', 'link', 'image'
    ];

    public function setImageAttribute($value)
    {
        $this->attributes['image'] = Storage::put('images', $value);
    }
}
