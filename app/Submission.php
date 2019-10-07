<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Submission extends Model
{
    protected $fillable = ['user_id', 'answers'];



    public function user(){
    	return $this->belongsTo(User::class);
    }
}
