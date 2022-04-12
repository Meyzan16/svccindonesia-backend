<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'slug',
    ];

    public function products()
    {                                            
        return $this->hasMany(Products::class);
    }


}
