<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'date_birth',
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
