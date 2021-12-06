<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'technique_id',
        'inverse_tech_id'
    ];
}
