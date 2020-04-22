<?php

namespace App\EloquentModel;

use Illuminate\Database\Eloquent\Model;

class Key_result extends Model
{
    protected $guarded = ['id'];
    protected $table = 'key_result';

        public function objective()
        {
            return $this->belongsTo(objective::class);
        }
}
