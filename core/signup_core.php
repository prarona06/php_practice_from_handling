<?php
print_r($_GET);
echo $_GET['fullname'];

$r_method =$_SERVER['REQUEST_METHOD'];

if($r_method !== 'POST'){
    //throw new Exception('invaid request method');

    header('Location: ../index.php?error=Invalid Method!'); //header akta function ja dara redicect kora hoy onno akta file a dhuka hoy
}