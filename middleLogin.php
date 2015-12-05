<?php 

require_once 'openSession.php';
require_once 'closeSession.php';
require_once 'checkLogin.php';
require_once 'validRegex.php';

ob_start();

$user = $_POST['user'];
$password = $_POST['password'];

    if ((empty($_POST['user'])) || (empty($_POST['password']))) {
        //$error = 'Erreur de connexion : Vous devez remplir tous les champs.';
        
        header("Location: error.php");
    }

    elseif (!checkUser($user)) {
        //$error = 'Erreur de connexion : caractère illégal dans le nom d\'utilisateur.';
        
        header("Location: error.php");
    }
    
    elseif (!checkPassword($password)) {
        //$error = 'Erreur de connexion : caractère illégal dans le mot de passe.';
        
        header("Location: error.php");
    }
    
    elseif (!checkLogin($user,$password)) {
        //$error = 'Mauvais nom d\'utilisateur ou mot de passe';
        
        header("Location: error.php");
    }
    
    else {
        
        if (checkCookie()) {
        
            $nameforcookie = getFirstName($user);
            createSession($nameforcookie);
            header ("Location: index.php");
        }
        
        else {
            closeSession();
        }
    }
    
ob_flush();
?>