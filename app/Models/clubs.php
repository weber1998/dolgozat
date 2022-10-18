<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clubs extends Model
{
    use HasFactory;

    protected $fillable = [
        'establishment',
        'location',
        'max_number'
    ];
}
