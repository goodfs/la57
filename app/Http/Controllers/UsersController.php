<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public  function create(){
//
//          $re=User::all() ;
//           dump($re);
        return view('users.create') ;
    }

    public function show(User $user){
               return view('users.show',compact('user'));
    }
}
