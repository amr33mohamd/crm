<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class traffic_source extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
}
