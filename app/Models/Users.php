<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Users extends Model
{
    use HasFactory;
    private $user;
    public function submitLogin($email, $password){
        $user = DB::select('select * from users where email= ? and password = ? limit 1', [$email,$password]);
        return $user;
    }
}
