<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function author() {
        return $this->belongsTo('App\Author');
    }

    public function publisher() {
        return $this->belongsTo('App\Publisher');
    }
}
