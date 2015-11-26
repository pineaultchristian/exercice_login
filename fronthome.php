 <?php 

            if (!isset($_COOKIE['PHPSESSID'])) {
                header ("Location: frontHomeLogin.php");
            }

            session_name($_COOKIE['PHPSESSID']);
            session_start();
            session_regenerate_id();

            // echo "You logged in successfully. Where do you go next?" . PHP_EOL;
            // $_SESSION['time']     = date('c');
            
        ?>

        <h1>Congratulation <?php echo $username ?> you are in!</h1>
        <p>We have a couple of page for you. By a couple I really mean a couple... Two pages.</p>
        <a href="" title="">page 1</a>
        <a href="" title="">page 2</a>