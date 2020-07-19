<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'post_id',
    ];

    public function gallery() {
    	return $this->belongsTo(Post::class);
    }
}
