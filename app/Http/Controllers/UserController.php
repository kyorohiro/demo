<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function show(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        if(empty($user)) {
            return abort(404, 'Page not found');
        }
        return view('user/show', ["user"=>$user]);
    }
   
    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        return view('user/show');
    } 
}
