<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Pest\Arch\Support\FileLineFinder;

class Banner extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image'
    ];
}
