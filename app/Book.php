<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function library()
    {
        return $this->belongsToMany(Bookshelf::class);
    }
}
