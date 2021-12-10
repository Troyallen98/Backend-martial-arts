<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Position;
use App\Models\Technique;


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


    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function technique()
    {
        return $this->belongsTo(Technique::class);


    }
    public function inverse_technique()
    {
        return $this->belongsTo(Technique::class);


    }

}
