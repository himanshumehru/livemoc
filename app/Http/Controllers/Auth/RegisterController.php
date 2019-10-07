<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = [
            'abfmid.digits_between' => 'The ABFM ID should be between 4 - 6 digits long.',
            'abfmid.numeric' => 'The ABFM ID should contain numbers only.',
            'abfmid.required' => 'ABFM ID is required',
            'firstname.regex' => 'First name should only contain letters A-Z.',
            'middlename.regex' => 'Middle name should only contain letters A-Z.',
            'firstname.required' => 'First Name is required',
            'lastname.required' => 'Last Name is required',
            'lastname.regex' => 'Last name should only contain letters A-Z.',
            'birthday.required' => 'You must enter your birthday'
            ];
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]+$/u'],
            'middlename' => ['max:255'],
            'lastname' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]+$/u'],
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'abfmid' =>['required', 'confirmed','numeric', 'digits_between:4,6', 'starts_with:0,1'],
            'birthday'=>['required', 'date'],
            'gender'=>['required','in:male,female,other,notsay','string']
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $birthday = date('Y-m-d', strtotime($data['birthday']));
      
        return User::create([
            'firstname' => ucfirst($data['firstname']),
            'middlename' => ucfirst($data['middlename']),
            'lastname' => ucfirst($data['lastname']),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'abfmid' => $data['abfmid'],
            'birthday' => $birthday ,
            'gender' =>$data['gender']
        ]);
    }

}
