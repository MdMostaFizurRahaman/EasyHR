<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = ['name', 'email', 'mobile', 'address', 'type_id','image'];

    public function branchType() {
        $this->belongsTo('App\BranchType');
    }
}
