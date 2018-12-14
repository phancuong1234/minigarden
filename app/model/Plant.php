<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Plant extends Model
{
    public function getById($id){
    	return DB::table('information')->where('ID_Bonsai',$id)->first();
    }
    public function getDS(){
        return DB::table('information')->get();
    }
    public function dsPlant(){
    	return DB::table('information')->paginate(10);
    }
    public function themPlant($name,$tem,$hum,$light){
    	return DB::table('information')->insert(['Name_Bonsai' => $name,'Nhiet_Do' => $tem,'Do_Am' => $hum,'Anh_Sang' => $light]);
    }
    public function remove($id){
    	 DB::table('information')->where('ID_Bonsai',$id)->delete();
    }
    public function suaPlant($id,$name,$tem,$hum,$light){
         return DB::table('information')->where('ID_Bonsai',$id)->update(['Name_Bonsai' => $name,'Nhiet_Do' => $tem,'Do_Am' => $hum,'Anh_Sang' => $light]);
    }
}
