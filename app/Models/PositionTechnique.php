<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionTechnique extends Model
{
    use HasFactory;
    protected $table = 'position_techniques';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['position_id', 'technique_id', 'inverse_tech_id'];


    public function position_id()
    {
        return $this->belongsTo(Position::class);
    }

    public function technique_id()
    {
        return $this->belongsTo(Technique::class);


    }
    public function position_techniques()
    {
        return $this->hasMany(Position_technique::class, 'inverse_tech_id');
    }

    /**
     * Get the foundation that owns the position.
     */
    public function inverse_tech()
    {
        return $this->belongsTo(Position_technique::class, 'inverse_tech_id');
    }

}
