<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MakeHold extends Model
{
    protected $fillable = ['member_id', 'teacher_id', 'classdate', 'classtime', 'classtype'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
