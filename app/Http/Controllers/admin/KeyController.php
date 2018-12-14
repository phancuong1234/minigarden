<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\model\key;
use App\Http\Requests\KeyRequest;
use Session;
class KeyController extends Controller
{
    public function __construct(key $mKey){
    		$this->mKey = $mKey;
    	}	
	  public function index(){
	        // if(!session::has('username'))
	        //     return redirect(url('/'));
	    	$id = '';
	    	$name = '';
	    	$danhsach = $this->mKey->dsKey();
	    	return view('admin.qlkey.index',compact('danhsach','id','name'));
  	}
    public function getAdd(){
	    	// if(!Session::has('username')||Session::get('role')!=1)
	    	//        return redirect(url('/'));
	        //$license = "";	        
	    	return view("admin.qlkey.add",compact('license'));

  	}
  	public function postAdd(Request $request){
	    	// if(!Session::has('username')||Session::get('quyenTruyCap')!=3)
	     //        return redirect(url('/'));
    	  $license = $request->license;
        $this->mKey->themKey($license);
        $request->session()->flash('msg','Thêm Thành Công');
         return redirect()->Route('admin.key.index');
   	}
	  public function getEdit($id){
	    	// if(!Session::has('username')||Session::get('quyenTruyCap')!=3)
	     //        return redirect(url('/'));
	    	$danhsach = $this->mKey->getById($id);
	    	return view("admin.qlkey.edit",compact('danhsach','id'));
	  }
    public function postEdit(KeyRequest $request,$id){
    	// if(!Session::has('username')||Session::get('quyenTruyCap')!=3)
    	 //        return redirect(url('/'));
    		$license = $request->license;
        $st =  $request->status;
        $this->mKey->suaKey($id,$license,$st);
        $request->session()->flash('msg','Sửa Thành Công');
          return redirect()->Route('admin.key.index');
        // }
   	}

    public function delete($id){
      	// if(!Session::has('username')||Session::get('quyenTruyCap')!=3)
       //        return redirect(url('/'));
      	$this->mKey->remove($id);
      	Session::flash('msg','Xóa Thành Công');
      	return redirect()->Route('admin.key.index');
    }

}
