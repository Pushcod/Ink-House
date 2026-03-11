<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'description',
        'team_img',
        'image',
        'manager_id',
    ];


    public function manager(){
        return $this->belongsTo(Manager::class);
    }
}
