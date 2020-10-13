<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coffe extends Model
{
    protected $fillable = ['name','harga','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}



