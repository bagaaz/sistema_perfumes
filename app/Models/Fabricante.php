<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    protected $table = 'fabricantes';
    protected $fillable = ['nome', 'pais'];
}
