<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttiresModel extends Model
{
    protected $fillable = ['name', 'size', 'color', 'price', 'image'];
}
