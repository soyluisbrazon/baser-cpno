<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'id_brands',
        'id_categorys',
        'id_genders',
        'codigo',
        'nombre',
        'descripcion',
        'stock',
        'precio_neto',
        'imagen',
        'estatus',    
    ];
    public function brand(){
        return $this->belongsToMany(brand::class);      
    }
    
    public function category(){
        return $this->belongsToMany(category::class);      
    }

    public function gender(){
        return $this->belongsToMany(gender::class);      
    }

    public function image(){
        return $this->hasMany(image::class);
    }

    public function income_history(){
        return $this->hasMany(income_history::class);   
    }
    public function order_detail(){
        return $this->hasMany(order_detail::class);   
    }
}
