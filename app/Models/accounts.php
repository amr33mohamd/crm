<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accounts extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',

    ];
    public function lead()
    {
       return $this->belongsTo(leads::class,'lead_id','id');
     }
}
