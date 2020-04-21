<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class objective extends Model
{
    protected $guarded = ['id'];

        public function key_result()
        {
            return $this->hasMany(key_result::class);
        }
}
