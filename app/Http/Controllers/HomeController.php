<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Model\Plant;
class HomeController extends Controller
{
    public function __construct(Plant $mPlant){
            $this->mPlant = $mPlant;
        }
    public function index(){
    	if(!session::has('account'))
            return redirect(url('/login'));
    	return view('public.index');
    }
    public function index2(){
    	if(!session::has('account'))
            return redirect(url('/login'));
        $result = $this->mPlant->getDS();
    	return view('public.index2',compact('result'));
    }
       public function profile(){
        if(!session::has('account'))
            return redirect(url('/login'));
        return view('public.information');
    }
    public function test(){
    	if(!session::has('account'))
            return redirect(url('/login'));
    	return view('public.test');
    }
}
