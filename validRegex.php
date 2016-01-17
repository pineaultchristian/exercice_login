<?php

function checkUser($user) {
    
     $pattern='/^[a-zA-Z0-9_]+$/';
    
     $result = preg_match($pattern, $user);
    
     return $result;
}
        
function checkPassword($password) {
        
     $pattern = '/^[a-zA-Z0-9_]+$/';
    
     $result = preg_match($pattern, $password);
    
     return $result;
}