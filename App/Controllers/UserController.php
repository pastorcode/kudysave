<?php
namespace App\Controllers;
use App\Controllers\Controller;


/** 
 * main controller 
 * 
*/
class UserController extends Controller {

    public function login(){
        return $this->view('user/login',['prince'=>'kelewke','title'=>'Login']); 
    }

    public function dashboard(){
        return $this->view('user/dashboard',['prince'=>'kelewke','title'=>'Dashboard']); 
    }
    public function quicksave(){
        return $this->view('user/quicksave',['prince'=>'kelewke','title'=>'Quick Save']); 
    }
    public function withdraw(){
        return $this->view('user/withdraw',['prince'=>'kelewke','title'=>'Withdraw']); 
    }
    

    public function transaction(){
        return $this->view('user/transaction',['prince'=>'kelewke','title'=>'Trasaction']); 
    }
    public function profile(){
        return $this->view('user/my-profile',['prince'=>'kelewke','title'=>'My Profile']); 
    }
}