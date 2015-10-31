<?php 

require_once 'homeLogin.php';
require_once 'openSession.php';
require_once 'closeSession.php';
require_once 'checkLogin.php';

manageLogin();

function manageLogin() {
    
    $user = $_POST["username"];
    $password = $_POST["password"];
    
    if (checkLogin($user, $password)) {
        
        createSession();
        
        if (checkCookie()) {
            header ("Location: login1.php");
        }
        
        else {
            closeSession();
        }
    }
    
    else {
        echo 'Username and/or password incorrect. Please try again.';
    }
}

?>