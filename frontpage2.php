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
<div class="main-container page2">
    <div class="page-container">
        <div class="content">
            <h1>Alright <?php echo $username ?>, last page!</h1>
            <p>Hope you didn't get lost. If so I'll give you a hint: you're on the second page of a two pages site.</p>
            <p>If you're still lost, go back to the <span class='inside-link'><a class='in-phrase' href="<?php echo $_SERVER['PHP_SELF'];?>">starting point</a></p>
            <p>If not... go back to the <span class='inside-link'><a class='in-phrase' href="<?php echo $_SERVER['PHP_SELF'];?>">starting point</a></p>
            <p class="outing">Or, as always, you could always <a class='link-button roll' href="backCloseSession.php"><span data-title='GET OUT!!!'>GET OUT!!!</span></a></p>
        </div>
    </div> 
</div>