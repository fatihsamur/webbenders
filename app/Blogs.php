<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'blogs';

    public function category()
    {
        return $this->belongsTo('App\Categories','category_id');
    }
}
