<?php
//GET method.............
/*
print_r($_GET);
echo $_GET['fullname'];

$r_method =$_SERVER['REQUEST_METHOD'];

if($r_method !== 'POST'){
    //throw new Exception('invaid request method');

    
    header('Location: ../index.php?error=Invalid Method!'); //header akta function ja dara redicect kora hoy onno akta file a dhuka hoy
//"?" akhana ? ta hlo query parametter or query string                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      


} */

//post Method ..........
$r_method =$_SERVER['REQUEST_METHOD'];

if($r_method !== 'POST'){
    header('Location: ../index.php?error=Invalid Method!');
exit;
}
    

$fname =$_POST['fullname'];
$email =$_POST['fullemail'];
$password =$_POST['fullpassword'];
$confirm =$_POST['fullconfirm'];



echo $fname . '<br>';
echo $email . '<br>';
echo $password . '<br>';
echo $confirm . '<br>';
