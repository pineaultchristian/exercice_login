<html>
<body>
<?php 

if (!isset($_COOKIE['PHPSESSID'])) {
    header ("Location: homeLogin.php");
}

echo 'Welcome to page 2. Get back on page 1 or disconnect?';

?>

<a href="login1.php">Page 1</a>
<form action="disconnect.php" method="post">
<br>
<input type="submit" value="Disconnect">
</form>
</body>
</html>