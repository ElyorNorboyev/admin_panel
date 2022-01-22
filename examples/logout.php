<?php
session_start();
require_once 'class.user.php';
$user = new USER($DB_con);

if(!$user->is_loggedin())
{
 $user->redirect('login.php');
}

if($user->is_loggedin()!="")
{
 $user->logout(); 
 $user->redirect('login.php');
}
?>