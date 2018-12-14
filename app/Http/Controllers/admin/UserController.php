<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Http\Requests\UserRequest;
use Session;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
   public function __construct(User $mUser){
    	$this->mUser = $mUser;
    }	
   public function index(){
        // if(!session::has('username'))
        //     return redirect(url('/'));
    	$iduser = '';
    	$username = '';
    	$danhsach = $this->mUser->dsUser();
    	return view('admin.qluser.index',compact('danhsach','iduser','username'));
    }
     public function getAdd(){
    	// if(!Session::has('username')||Session::get('role')!=1)
     //        return redirect(url('/'));
        $username = "";
        $password = "";
        $fullname = "";
        $email = "";
        $macaddress = "";
        $numberplant= "";
    	return view("admin.qluser.add",compact('username','password','fullname','email','macaddress','numberplant'));

    }
    public function postAdd(UserRequest $request){
    	// if(!Session::has('username')||Session::get('quyenTruyCap')!=3)
     //        return redirect(url('/'));
    	$username = $request->username;
    	$password = $request->password;
    	$fullname = $request->fullname;
    	$email = $request->email;
        $numberplant = $request->numberplant;
        $macaddress = $request->macaddress;


        $count = DB::table('users')->where('Username',$username)->orwhere('email',$email)->orwhere('MacAddress',$macaddress)->count();
    	if($count>0){
            $request->session()->flash('error','username , email hoặc địa chỉ Mac đã tồn tại');
            return view("admin.qluser.add",compact('username','password','fullname','email','macaddress','numberplant'));
            return redirect()->Route('admin.user.add');
        }
        else {
            $result=$this->mUser->themUser($username,$password,$email,$fullname,$macaddress,$numberplant);
            if($result){
                $request->session()->flash('themuser',array('numberplant'=>$numberplant,'macaddress'=>$macaddress));
                $request->session()->flash('msg','Thêm Thành Công');
                return redirect()->Route('admin.user.index');
            }
        }
    	
    }

    public function getEdit($macaddress){
    	// if(!Session::has('username')||Session::get('quyenTruyCap')!=3)
     //        return redirect(url('/'));
    	$danhsach = $this->mUser->getById($macaddress);
    	return view("admin.qluser.edit",compact('danhsach','macaddress'));
    }
    public function postEdit(UserRequest $request,$macaddress){
    	// if(!Session::has('username')||Session::get('quyenTruyCap')!=3)
     //        return redirect(url('/'));
        $macaddress1 = $request->exp;
    	$username = $request->username;
        $password = $request->password;
        $fullname = $request->fullname;
        $email = $request->email;
        $macaddress = $request->macaddress;
        $numberplant = $request->numberplant;
        // $macaddress = $request->macaddress;
        // $count = DB::table('users')->where('Username',$username)->orwhere('email',$email)->orwhere('MacAddress',$macaddress)->count();
        // if($count>1){
        //     $request->session()->flash('error','username , email hoặc địa chỉ Mac đã tồn tại');
        //     return redirect()->Route('admin.user.edit');
        // }
        // else {
       //
            $result = $this->mUser->suaUser($username,$password,$email,$fullname,$macaddress,$macaddress1, $numberplant);
            if($result){
                $request->session()->flash('suauser',array('numberplant'=>$numberplant,'macaddress'=>$macaddress));
                $request->session()->flash('msg','Sửa Thành Công');
                return redirect()->Route('admin.user.index');
            }
        // }
    }
        public function delete($id){
            // if(!Session::has('username')||Session::get('quyenTruyCap')!=3)
         //        return redirect(url('/'));
            $result1 = $this->mUser->remove($id);
            Session::flash('xoauser',$id);
            Session::flash('msg','Xóa Thành Công');
            return redirect()->Route('admin.user.index');
        }

    // public function search(Request $request){
    // 	if(!Session::has('username')||Session::get('quyenTruyCap')!=3)
    //         return redirect(url('/'));
    // 	$madv = $request->madonvi;
    // 	$tendonvi = $request->tendonvi;
    //     $madv = ($madv==null)?'abx@@@$%!@#':$madv;
    // 	$tendonvi = ($tendonvi==null)?'abx@@@$%!@#':$tendonvi;
    //     // dd($madv,$tendonvi);
    // 	$danhsach = $this->mUser->search($tendonvi,$madv);
    // 	return view("admin.donvi.index",compact('danhsach','madv','tendonvi'));
    // }
}
