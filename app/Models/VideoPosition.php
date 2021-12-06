<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoPosition extends Model
{
    use HasFactory;
    public $fillable = [
        'video_id',
        'position_id'
    ];
}
