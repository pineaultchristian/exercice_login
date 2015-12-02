<html>
<body>
<?php 

if (!isset($_COOKIE['PHPSESSID'])) {
    header ("Location: frontHomeLogin.php");
}

session_name($_COOKIE['PHPSESSID']);
session_start();
session_regenerate_id();


echo $_COOKIE['user'] . ' logged in successfully.' . PHP_EOL;
echo "Where do you go next?" . PHP_EOL;
$_SESSION['time']     = date('c');
?>

<a href="frontLogin2.php">Page 2</a>

</body>
</html>