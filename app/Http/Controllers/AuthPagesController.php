<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }



    public function profile(){
    	return view('frontend.profile');
    }

    public function pcof(){
    	return view('moc.pcof');
    }

    public function onepager(){
    	return view('moc.one-pager');
    }

    public function pretest(){
        if(!auth()->user()->isPretestComplete()){
    	   return view('moc.pre-test');
        }

        return redirect('/pcof');
    }

    public function posttest(){
        if(!auth()->user()->isPosttestComplete() && auth()->user()->isPretestComplete()){
    	   return view('moc.post-test');
        }
        return redirect('/pcof');
    }

    public function editprofile(){
        return view('frontend.editprofile');
    }

    public function updateuser(User $user){
        dd($user);

    }

}
