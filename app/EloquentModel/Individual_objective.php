<?php

namespace App\EloquentModel;

use Illuminate\Database\Eloquent\Model;

class Individual_objective extends Model
{
    protected $guarded = ['id'];
    protected $table = 'individual_objective';

    public function objective()
    {
        return $this->hasMany(Individual_key_result::class);
    }
}
