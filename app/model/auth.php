<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class auth extends Model
{
     public function get($username,$password){
    	return DB::table('users')->where('Username',$username)->where('Password',$password)->get();
    }
}
