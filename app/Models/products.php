<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\products_galleries;
use App\Models\Categories;
use App\Models\Categori_provinsi;

class products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'users_id',
        'categories_id',
        'price',
        'description',
        'slug'
    ];

    protected $hidden =[];

    //satu prodak mempunyai banyak foto
    public function gallaries()
    {                                            
        return $this->hasMany(products_galleries::class, 'products_id' , 'id');
    }

    //product ini dibuat oleh siapa
    public function user()
    {                                      //primarykey    //foreignkey
        return $this->hasOne(User::class, 'id' , 'users_id');
    }

    public function Categories()
    {
        return $this->belongsTo(Categories::class, 'categories_id', 'id' );
    }

    public function category_provinsi()
    {
        return $this->belongsTo(Categori_provinsi::class, 'categori_provinsi_id', 'id' );
    }

    
}
