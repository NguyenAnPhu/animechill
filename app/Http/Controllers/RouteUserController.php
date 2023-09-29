<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class RouteUserController extends Controller
{
    public function showUser(Request $request)
    {
        $userList= DB::table('user')->get();
        return view('admin.users')->with([
                'userList'=>$userList
        ]);
    }
    public function addUser(Request $request){
        $name= $request->name;
        $email= $request->email;
        $birthday= $request->birthday;
        $password= $request->password;

        DB::table('user')->insert([
            'name'=>$name,
            'email'=>$email,
            'birthday'=>$birthday,
            'password'=>$password
        ]);
        return redirect()->route('login');
     }
}
