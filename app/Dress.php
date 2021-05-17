<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    protected $fillable = ['name', 'color', 'description', 'size', 'season', 'img_path', 'price'];
}
