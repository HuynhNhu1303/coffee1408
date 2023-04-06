<?php
$act="forgetps";
if(isset($_GET['act']))
{
    $act=$_GET['act'];
}
switch ($act) {
    case 'forgetps':
       include "./View/forgetpassword.php";
        break;
    
    case 'forgetps_action':
       if(isset($_POST['submit_email'])){
        $email=$_POST['email'];
        //
       }
       
}
?>