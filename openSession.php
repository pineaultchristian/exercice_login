<?php

function createSession($user) {

    //Open session
    session_start();
    
    setcookie ('userName', $user, time() + 60*60);
    
    $_SESSION["user"] = $user;
    
    /*
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    } 
    
    else {
        $_SESSION['count']++;
    }
    */
}

function checkCookie() {
      
    // Set test cookie
    setcookie ('test', 'test', time() + 60*60);
        
    // Reload page
    header("Refresh:0");
    
    // Check if the client returns us the cookie we just set.
    if(count($_COOKIE) > 0) {
        
        //Delete test cookie
        setcookie('test', 'test', time() - 42000);
        
        return TRUE;
    }
    
    else {
        
        return FALSE;
        
    }
    
}

?>
