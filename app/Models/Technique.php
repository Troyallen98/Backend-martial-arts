<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Technique extends Model
{
    use HasFactory;
    protected $table = 'techniques';
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    public $fillable = [
        'name',
        'video_url',
        'user_id'
    ];

    /**
     * Get the user that owns the technique.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
