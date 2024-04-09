<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // $user = User::find(1)->phone;
        // return $user;
        $phone = Phone::find(1)->user;
        return $phone;
    }
}
