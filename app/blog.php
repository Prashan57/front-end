<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    // protected $table = 'table_name';

    protected $casts = [
        'design' => 'array',
    ];

    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/y";
        if ($showTimes) $format = $format . "YYYY-MM-DD";
        return $this->created_at->format($format);
    }

    public function publicationLabel(){
        if (! $this -> published_at){
            return "<span class='label label-warning'>Draft</span>";
        }
        elseif ($this->published_at && $this->published_at -> isFuture() ){
            return "<span class='label label-info'>Schedule</span>";
        }
        else{
            return "<span class='label label-success'>Published</span>";
        }
    }

}
