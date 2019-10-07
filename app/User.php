<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Submission;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'middlename','lastname', 'email', 'password', 'abfmid', 'birthday', 'gender', 'level', 'pretest_complete','posttest_complete'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function completePretest(){
        $this->update(['pretest_complete' => true]);
    }
    public function completePosttest(){
        $this->update(['posttest_complete' => true]);
    }
    public function isPretestComplete(){
        return $this->pretest_complete;
    }
    public function isPosttestComplete(){
        return $this->posttest_complete;
    }

    public function submissions(){
        return $this->hasMany(Submission::class);
    }
}
