<?php

require_once 'openSession.php';

$user = 'martinbeaudry';

createSession();

if (checkCookie($user)) {
    echo 'Cookies are enabled in your browser.';
}

else {
    
    /*Dans le code du middle, en cas de réponse négative, il faudra
    renvoyer l'utilisateur à une page l'informant que les cookies
    sont désactivés (en appelant la fonction header() comme je le 
    fais ci-dessous, et en remplaçant <404.html> par un vrai fichier
    donnant cette information), appeler la fonction closeSession(), puis renvoyer
    l'utilisateur à la page d'authentification pour qu'il se réauthentifie,
    cette fois avec les cookies activés. */
    header ("Location: <404.html>");
    echo 'Cookies are disabled in your browser.' . PHP_EOL;
}

var_dump ($_COOKIE);

?>
