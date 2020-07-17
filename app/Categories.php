<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    public function blogs()
    {
        return $this->hasMany('App\Blogs', 'category_id');
    }
}
