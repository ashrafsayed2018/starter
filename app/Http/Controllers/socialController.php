<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class socialController extends Controller
{
    
    public function redirect($social) {
        return Socialite::driver($social)->redirect(); 
    }

    public function callback($social) {

       $user = Socialite::with($social)->stateless()->user();
       return $user;
    }
}
