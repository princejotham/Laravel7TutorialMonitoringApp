<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassDetails extends Model
{
    protected $fillable = ['member_id', 'teacher_id', 'classtime', 'startdate', 'enddate', 'payment', 'classstatus', 'remainingcount'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
