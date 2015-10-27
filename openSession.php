<?php

function createSession() {

    //Open session
    session_start();
    
}

function checkCookie($user) {
    
    // Check if cookie has been set or not
    if ($_GET['set'] != 'yes') {
    
        // Set test cookie
        setcookie ($user, $user, time() + 60*60);
    
        // Reload page
        header ("Location: testOpenSessionTest.php?set=yes");
    
    }
    
    else {
    
        // Check if the client sent us the cookie we just set.
        if (!empty($_COOKIE[$user])) {
            
            //Cookies are enabled. We can now delete the test cookie.
            setcookie ($user, $user, time() - 60*60);
            
            return TRUE;
        }
        
        else {
            
            //Cookies are disabled.
            return FALSE;
        }
    }
    
}

?>
