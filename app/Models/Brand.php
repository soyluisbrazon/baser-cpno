<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'nombre',
        'descripcion',     
    ];

    public function product(){
        return $this->hasMany(product::class);
    }
}
