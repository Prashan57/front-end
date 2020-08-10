<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function blog()
    {
        return $this->hasMany(blog::class);
    }

    public function getRouteKeyName()
    {
        return 'title';
    }
}
