<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class key extends Model
{
     public function getById($id){
    	return DB::table('licensekey')->where('ID_key',$id)->first();
    }

    public function dsKey(){
    	return DB::table('licensekey')->paginate(10);
    }
    public function themKey($license){
    	return DB::table('licensekey')->insert(["License_Key" => $license, "status" => 0]);
    }
    public function remove($id){
    	 DB::table('licensekey')->where('ID_key',$id)->delete();
    }
   
     public function suaKey($id,$license,$st){
         return DB::table('licensekey')->where('ID_key',$id)->update(['License_Key' => $license ,'status' => $st]);
    }
}
