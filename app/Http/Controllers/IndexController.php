<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class IndexController extends Controller
{
   public function postSignUp(Request $request)
        {
            $this->validate($request, [ 
                'name' => 'required|max:100',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:4',
            ]);
        
            $name = $request['name'];
            $email = $request['email'];
            $password = bcrypt($request['password']);
        
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->role_id = 2;
            $user->password = $password;
                
            $user->save();
            
            Auth::login($user);
            \Mail::to($user)->send(new WelcomeMail($user));
        
            return redirect()->route('voyager.profile');
        }
    
    public function getRegisterPage()
        {
        return view ('register');
        
    }
    
}