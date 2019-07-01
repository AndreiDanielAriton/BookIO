<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookshelf extends Model
{

    protected $fillable = ['title'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function collection()
    {
        return $this->belongsToMany(Book::class);
    }
}
