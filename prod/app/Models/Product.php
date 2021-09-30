<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'url'];

    function manufacturer() {
        return $this->belongsTo('App\Models\Manufacturer');
    }

    function reviews() {
        return $this->hasMany('App\Models\Review'); 
    }
}
