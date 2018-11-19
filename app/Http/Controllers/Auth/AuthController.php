<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\model\auth;
use Session;

class AuthController extends Controller
{
    public function __construct(auth $mauth){
         $this->mauth = $mauth;
    }  
     public function login(){
        return view('auth.login');
    }
    public function postLogin(LoginRequest $request){
        $username= $request->username;
        $password = $request->password;   
        $data = $this->mauth->get($username,$password);
       // die($data);
        if(count($data)>0){
                    foreach ($data as $value) {
                        Session::put('account', array('username' => $value->Username,'fullname' => $value->Fullname,'email' => $value->Email,'password' => $value->Password,'MacAddress'=>$value->MacAddress));
                    }
                    return redirect()->route('home.index2');
                // else{
                //     foreach ($data as $value) {
                //     Session::put(array('username' => $value->TEN_DANG_NHAP,'chucVu' => $value->MA_CHUC_VU,'maNhanSu' => $value->MA_NHAN_SU,'tenNhanSu'=>$value->HO_VA_TEN,'maDonVi'=>$value->MA_DON_VI,'tenDonVi'=>$value->TEN_DON_VI,'quyenTruyCap'=>$value->QUYEN_TRUY_CAP));
                //     }
                //     return redirect()->route('quanlyvanban.congvan.index');
                // }

            }
            else{
                $request->session()->flash('msg','Đăng Nhập Thất Bại, Vui lòng kiểm tra lại tài khoản hoặc mật khẩu!');
                 return redirect()->Route('auth.login');
            }
    }
    public function logout(){
        session()->flush();
         return view('auth.login');
        
        }
}
