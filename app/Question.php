<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question','active','lifespan'];

    public function responses() {
        return $this->hasMany('App\Response');
    }
}
