<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
     public function ideas()
    {
        return $this->hasMany(Evaluation::class);
    }
}
