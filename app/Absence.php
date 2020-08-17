<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $fillable = ['teacher_id', 'absencedata', 'starttime', 'endtime', 'status'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
