<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chickensales extends Model
{
    use HasFactory;

    protected $fillable = ['weights' , 'kilo_price' , 'total'];
}
