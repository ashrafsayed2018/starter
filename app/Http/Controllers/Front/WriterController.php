<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class WriterController extends Controller
{
   public function showWriter() {
       return "this is the writers page";
   }
}
