<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class HomeController extends Controller
{
    public function index(){
    	
    	return view('public.index');
    }
    public function index2(){
    	// if(!session::has('username'))
     //        return redirect(url('/'));
    	return view('public.index2');
    }
    public function test(){
    	// if(!session::has('username'))
     //        return redirect(url('/'));
    	return view('public.test');
    }
}
