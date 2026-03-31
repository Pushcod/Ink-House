<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'author_id',
        'country_id',
        'image'
    ];

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function getImageUrlAttribute(): ?string
    {
        return $this->image ? asset('storage/'. $this->image) : null;
    }
}
