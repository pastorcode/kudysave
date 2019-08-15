<?php
namespace App\Controllers;
use App\Controllers\Controller;


/** 
 * main controller 
 * 
*/
class HomeController extends Controller {
// public $components = array("Email");

    public function index(){
    //    echo "SDSD";
    return $this->view('pages/home',['prince'=>'kelewke','title'=>'ekemini']);

    }
 
}