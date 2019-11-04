<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchType extends Model
{
    protected $fillable = ['name'];

    public function branch()
    {
        $this->hasMany('App\Branch');
    }
}
