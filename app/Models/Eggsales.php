<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eggsales extends Model
{
    use HasFactory;

    protected $fillable = ['quantity' , 'salary' , 'total'];
}
