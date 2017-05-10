<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function index(){
        $name = Auth::user()->name;
        return 'this is a profile page , your name is '.$name;
    }
}
