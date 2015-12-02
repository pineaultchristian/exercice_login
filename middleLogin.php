<?php 

require_once 'homelogin.php';
require_once 'openSession.php';
require_once 'closeSession.php';
require_once 'checkLogin.php';

manageLogin();

function manageLogin() {
    
    //Put the data given by the user in a variable
    $user = (string) $_POST["username"];
    $password = (string) $_POST["password"];
    
    //Check if username and password are correct
    if (checkLogin($user, $password)) {

        //Get the real first name of the user
        $user = getFirstName($user);
        
        //Open a session with the first name as argument to create the cookie
        createSession($user);
        
        //Check if browser accepts cookies
        if (checkCookie()) {
            
            //If it does, all is well and we go to the first page
            header ("Location: index.php");
        }
        
        else {
            //Otherwise, the session can't open, so we clean everything up.
            closeSession();
        }
    }
    
    else {
        //TODO: find a way to display error message to user.
        
        //The username or password is not correct.
        echo 'Username and/or password incorrect. Please try again.';
    }
}
 ?>