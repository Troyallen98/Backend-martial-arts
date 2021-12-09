<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['content', 'user_id', 'technique_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function technique()
    {
        return $this->belongsTo(Technique::class);
    }
}
