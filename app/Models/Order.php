<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=
    ['id_users',
     'serial',
     'exento',
     'total',
     'fecha',
     'status',

    ];
    public function user(){
        return $this->belongsToMany(user::class);
    }
    public function order_detail(){
        return $this->hasMany(order_detail::class);   
    }
}
