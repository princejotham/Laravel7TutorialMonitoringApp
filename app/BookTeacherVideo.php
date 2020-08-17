<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookTeacherVideo extends Model
{
    protected $fillable = ['teacher_id', 'name', 'career', 'selfintroduction', 'ispublished', 'videourl'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
