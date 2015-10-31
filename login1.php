<html>
<body>
<?php 

if (!isset($_COOKIE['PHPSESSID'])) {
    header ("Location: homeLogin.php");
}

echo 'You logged in successfully. Where do you go next?';

?>

<a href="login2.php">Page 2</a>

</body>
</html>