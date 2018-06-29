<?php

// Start the session
session_start();

//traspasamos a variables locales, para evitar complicaciones con las comillas:
$email = $_POST["email"];
$pass = $_POST["password"];
if($email=="lriccombene@gmail.com" && $pass=="123456"){
$_SESSION['admin'] = 'admin';

header('Location: index.php');
    
}


?>