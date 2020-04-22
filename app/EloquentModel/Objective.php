<?php

namespace App\EloquentModel;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    protected $table = 'objective';
    protected $guarded = ['id'];

    public function key_result()
    {
        return $this->hasMany(key_result::class);
    }
}
