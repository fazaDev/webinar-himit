<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $fillable = ['title', 'slug', 'image', 'status', 'content', 'author_id'];
    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getStatusLabelAttribute()
    {
        if ($this->status == 0) {
            return '<span class="badge badge-danger">Draft</span>';
        }
        return '<span class="badge badge-primary">Publish</span>';
    }
}
