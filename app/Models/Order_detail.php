<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'id_orders',
        'id_products',
        'cantidad',
        'precio',
    ];
    public function order(){
        return $this->belongsToMany(order::class);
    }
    public function product(){
        return $this->belongsToMany(product::class);
    }
}
