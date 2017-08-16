<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
 // protected $fillable = ['content', 'idea_id'];
    protected $table = 'evaluations';

    public function idea()
    {
        return $this->belongsTo(Idea::class);
    }
}
