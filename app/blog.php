<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    // protected $table = 'table_name';

    protected $casts = [
        'design' => 'array',
    ];
}
