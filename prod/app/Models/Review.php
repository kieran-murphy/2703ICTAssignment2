<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'review',
        'rating',
    ];
    
    function user() {
        return $this->belongsTo('App\Models\User');
    }

    function product() {
        return $this->belongsTo('App\Models\Product');
    }
}
