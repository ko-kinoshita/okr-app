<?php

namespace App\EloquentModel;

use Illuminate\Database\Eloquent\Model;

class Group_objective extends Model
{
    protected $guarded = ['id'];
    protected $table = 'group_objective';

    public function objective()
    {
        return $this->hasMany(Group_key_result::class);
    }
}
