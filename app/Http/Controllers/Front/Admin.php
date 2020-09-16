<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('test');
    }
    public function index() {
        return " 10 + 10 = 20";
    }
    public function test() {
        return "test";
    }
}
