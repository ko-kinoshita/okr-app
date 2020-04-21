<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class key_result extends Model
{
    protected $guarded = ['id'];

        public function objective()
        {
            return $this->belongsTo(objective::class);
        }
}
