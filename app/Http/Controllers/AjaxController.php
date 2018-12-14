<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Plant;
use Session;
class AjaxController extends Controller
{
	public function __construct(Plant $mPlant){
    		$this->mPlant = $mPlant;
    	}
 	public function updateInfo(request $request){
 		$id = $request->idbonsai;
 		$result = $this->mPlant->getById($id);
 		return response()->json($result);
    	}
}