<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelTest extends Model
{
    protected $fillable = ['member_id', 'teacher_id', 'applicationdate', 'scheduledate', 'processstatus', 'evaluation'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
