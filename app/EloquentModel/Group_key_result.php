<?php

namespace App\EloquentModel;

use Illuminate\Database\Eloquent\Model;

class Group_key_result extends Model
{
    protected $guarded = ['id'];
    protected $table = 'group_key_result';

    public function objective()
    {
        return $this->belongsTo(Group_objective::class);
    }
}
