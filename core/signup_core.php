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
    
/*eita Post variable er jonno....


$fname =$_POST['fullname'];
$email =$_POST['fullemail'];
$password =$_POST['fullpassword'];
$confirm =$_POST['fullconfirm'];
*/

// Request variable er jonno...


$fname =$_REQUEST['fullname'];
$email =$_REQUEST['fullemail'];
$username=$_REQUEST['fullusername'];
$password =$_REQUEST['fullpassword'];
$confirm =$_REQUEST['fullconfirm'];

if (empty($fname) || empty($email ) || empty($username) || empty($password) || empty($confirm) ){
   
   $erros = [
     'name_required' => 'required',
     'email_required' => 'required',
     '$username_required' => 'required',
     'password_required' => 'required',
     'confirm_required' => 'required',
   ];
   
   $qString = http_build_query($erros);
   
   
    header('Location: ../index.php?'. $qString);
   
}

echo $fname . '<br>';
echo $email . '<br>';
echo $username . '<br>';
echo $password . '<br>';
echo $confirm . '<br>';
