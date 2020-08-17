<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['branch_id', 'username', 'password', 'koreanname', 'englishname', 'email', 'phoneno', 'skypeid', 'member_type', 'status'];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
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

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}
