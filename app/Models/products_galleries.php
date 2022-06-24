<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class products_galleries extends Model
{
    use HasFactory;
    protected $fillable = [
        'photos',
        'products_id'
    ];
    
    //satu prodak mempunyai banyak foto
    public function product()
    {                                            
        return $this->belongsTo(Products::class, 'products_id');
    }
}
