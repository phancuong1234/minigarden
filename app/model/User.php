<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class User extends Model
{
    // public function getAll(){
    // 	return DB::table('donvi')->get();
    // }
    public function getById($id){
    	return DB::table('users')->where('ID_User',$id)->first();
    }

    public function dsUser(){
    	return DB::table('users')->paginate(10);
    }
    public function themUser($username,$password,$email,$fullname,$macaddress){
    	return DB::table('users')->insert(['Username' => $username ,'Password' => $password,'Email' => $email,'Fullname' => $fullname,'MacAddress' => $macaddress]);
    }
    public function remove($id){
    	 DB::table('users')->where('ID_User',$id)->delete();
    }
   
     public function suaUser($id,$username,$password,$email,$fullname,$macaddress){
         return DB::table('users')->where('ID_User',$id)->update(['Username' => $username,'Email' => $email,'Password' => $password,'Fullname' => $fullname,'MacAddress' => $macaddress]);
    }
    // public function search($tendonvi,$madv){
    //     return DB::table('donvi')->where('TEN_DON_VI','like','%'.$tendonvi.'%')->orwhere('MA_DON_VI',$madv)->paginate(3);
    // }
}
