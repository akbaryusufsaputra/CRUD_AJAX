<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function coffe()
    {
        return $this->hasMany(Coffe::class);
    }
}
