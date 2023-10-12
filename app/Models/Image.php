<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'id_products',
        'imagen',      
    ];
    public function product(){
        return $this->belongsToMany(product::class);
    }
}
