<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['username', 'password', 'name', 'workinghours', 'position', 'gender', 'status'];

    public function absence()
    {
        return $this->hasMany(Absence::class);
    }

    public function meakehold()
    {
        return $this->hasMany(MakeHold::class);
    }

    public function classdetails()
    {
        return $this->hasMany(ClassDetails::class);
    }

    public function leveltest()
    {
        return $this->hasMany(LevelTest::class);
    }

    public function bookteachervideo()
    {
        return $this->hasMany(BookTeacherVideo::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}
