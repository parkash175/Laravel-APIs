<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(){
     $users  = User::get();
        return $users;        
    }
}
