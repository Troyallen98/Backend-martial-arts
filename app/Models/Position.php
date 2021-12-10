<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = 'positions';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'foundation_id'];




    /**
     * Get the positions for the foundation.
     */
    public function position_techniques()
    {
        return $this->hasMany(PositionTechniques::class);
    }
    /**
     * Get the positions for the foundation.
     */
    public function positions()
    {
        return $this->hasMany(Position::class, 'foundation_id');
    }

    /**
     * Get the foundation that owns the position.
     */
    public function foundation()
    {
        return $this->belongsTo(Position::class, 'foundation_id');
    }
}
