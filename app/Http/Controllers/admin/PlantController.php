<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Plant;
use App\Http\Requests\PlantRequest;
use Session;
class PlantController extends Controller
{

        public function __construct(Plant $mPlant){
    		$this->mPlant = $mPlant;
    	}	
	public function index(){
	        // if(!session::has('username'))
	        //     return redirect(url('/'));
	    	$id = '';
	    	$name = '';
	    	$danhsach = $this->mPlant->dsPlant();
	    	return view('admin.qlplant.index',compact('danhsach','idu','name'));
  	  }
     	public function getAdd(){
	    	// if(!Session::has('username')||Session::get('role')!=1)
	    	//        return redirect(url('/'));
	        $name = "";
	        $tem = "";
	        $hum = "";
	        $light = "";
	    	return view("admin.qlplant.add",compact('name','tem','hum','light'));

  	  }
  	public function postAdd(PlantRequest $request){
	    	// if(!Session::has('username')||Session::get('quyenTruyCap')!=3)
	     //        return redirect(url('/'));
	    	$name = $request->name;
	    	$tem = $request->temp;
	    	$hum = $request->humadity;
	        $light = $request->light;
	       $result = $this->mPlant->themPlant($name,$tem,$hum,$light);
	       if($result){
	       		$request->session()->flash('msg','Thêm Thành Công');
	         	return redirect()->Route('admin.plant.index');
	       }
	        
   	}

	public function getEdit($id){
	    	// if(!Session::has('username')||Session::get('quyenTruyCap')!=3)
	     //        return redirect(url('/'));
	    	$danhsach = $this->mPlant->getById($id);
	    	return view("admin.qlplant.edit",compact('danhsach','id'));
	 }
    public function postEdit(PlantRequest $request,$id){
    	// if(!Session::has('username')||Session::get('quyenTruyCap')!=3)
    	 //        return redirect(url('/'));
   
    		$name = $request->name;
	    	$tem = $request->temp;
	   	$hum = $request->humadity;
	  	$light = $request->light;
          	$this->mPlant->suaPlant($id,$name,$tem,$hum,$light);
           	$request->session()->flash('msg','Sửa Thành Công');
            	return redirect()->Route('admin.plant.index');
        // }
   	}

        public function delete($id){
        	// if(!Session::has('username')||Session::get('quyenTruyCap')!=3)
         //        return redirect(url('/'));
        	$this->mPlant->remove($id);
        	Session::flash('msg','Xóa Thành Công');
        	return redirect()->Route('admin.plant.index');
        }

}
