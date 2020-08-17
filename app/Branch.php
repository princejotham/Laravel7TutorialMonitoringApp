<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = ['branch'];

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
