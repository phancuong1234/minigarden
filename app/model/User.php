<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class User extends Model
{
    // public function getAll(){
    // 	return DB::table('donvi')->get();
    // }
    public function getById($macaddress){
    	return DB::table('users')->where('MacAddress',$macaddress)->first();
    }

    public function dsUser(){
    	return DB::table('users')->paginate(10);
    }
    public function themUser($username,$password,$email,$fullname,$macaddress,$numberplant){
    	return DB::table('users')->insert(['Username' => $username ,'Password' => $password,'Email' => $email,'Fullname' => $fullname,'MacAddress' => $macaddress,'Number_Bonsai'=> $numberplant]);
    }
    public function remove($macaddress){
    	 DB::table('users')->where('MacAddress',$macaddress)->delete();
    }
   
     public function suaUser($username,$password,$email,$fullname,$macaddress,$macaddress1,$numberplant){
         return DB::table('users')->where('MacAddress',$macaddress1)->update(['Username' => $username,'Email' => $email,'Password' => $password,'Fullname' => $fullname,'MacAddress' => $macaddress,'Number_Bonsai' => $numberplant]);
    }
    // public function search($tendonvi,$madv){
    //     return DB::table('donvi')->where('TEN_DON_VI','like','%'.$tendonvi.'%')->orwhere('MA_DON_VI',$madv)->paginate(3);
    // }
}
