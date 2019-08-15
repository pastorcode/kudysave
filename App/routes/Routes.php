<?php
/**
 * modify the router and get it working as you want
 * 
 * 
 */
$router = new Codefii\Http\Router();
$router->setNamespace('App\Controllers');
// $router->get('/',function(){
//     echo "hello world";
// });
$router->get('/login','User.login');

$router->get('/dashboard/home','User.dashboard');
$router->get('/dashboard/quicksave','User.quicksave');
$router->get('/dashboard/withdraw','User.withdraw');
$router->get('/dashboard/my-profile','User.profile');
$router->get('/dashboard/view-edit-user','User.view_edit_user');
$router->get('/dashboard/transaction','User.transaction');