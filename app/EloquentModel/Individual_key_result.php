<?php

namespace App\EloquentModel;

use Illuminate\Database\Eloquent\Model;

class Individual_key_result extends Model
{
    protected $guarded = ['id '];
    protected $table = 'individual_key_result';

    public function objective()
    {
        return $this->belongsTo(Individual_objective::class);
    }
}
