<?php

namespace App\EloquentModel;

use Illuminate\Database\Eloquent\Model;

class OKR extends Model
{
    protected $guarded = ['id','parent_id'];
    protected $table = '_o_k_r';
}
