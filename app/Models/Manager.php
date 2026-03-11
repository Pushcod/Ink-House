<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $fillable = [
        'name',
        'second_name',
        'image',
    ];

    public function team(){
        return $this->hasMany(Team::class);
    }
}