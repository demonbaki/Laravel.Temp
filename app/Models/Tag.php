<?php

namespace App\Models;

use Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function products(){
        //un tag puo' avere piu prodotti associati

        return $this->belongsToMany(Product::class);
    }
}
