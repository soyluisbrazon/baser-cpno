<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income_history extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'id_products',
        'id_users',
        'cantidad',
        'costo',
        'fecha',
    ];
    public function product(){
        return $this->belongsToMany(product::class);
    }
    public function user(){
        return $this->belongsToMany(user::class);
    }
}
