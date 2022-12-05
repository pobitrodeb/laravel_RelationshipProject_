<?php

namespace App\Http\Controllers;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        $phone = User::find(1)->phone; 
       // return $phone;
        
        $user = Phone::find(2)->user; 
       // return $user;

        return view('frontend.home.index',[
            'users' => User::all(),
        ]);
    }
}
