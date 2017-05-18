<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use User;

class Results extends Model
{
    public function users() {
        return $this->belongsTo('User');
    }
}
