<?php

function createSession() {

    //Open session
    session_start();
    
}

function checkCookie() {
    
    // Check if test cookie has been set
    if ($_GET['set'] != 'yes') {
    
        // Set test cookie
        setcookie ('test', 'test', time() + 60*60);
    
        // Reload page
        header ("Location: testOpenSessionTest.php?set=yes");
    
    }
    
    else {
    
        // Check if the client returns us the cookie we just set.
        if (isset($_COOKIE['test'])) {
            
            //Cookies are enabled. We can now delete the test cookie.
            setcookie('test', 'test', time() - 42000);
            
            return TRUE;
        }
        
        else {
            //Cookies are disabled.
            return FALSE;
        }
    }
}

?>
