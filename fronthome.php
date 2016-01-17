<?php 

    if (!isset($_SESSION["user"])) {
        header ("Location: closeSession.php");
    }
    
    session_regenerate_id();
?>

<div class="main-container home">
    <div class="home-container">
        <div class="content">
            <h1>Congratulations <?php echo $username ?> you are in!</h1>
            <p>We have a couple of pages for you. By a couple I really mean a couple... Two pages.</p>
            <a class='link-button roll' href="<?php echo $_SERVER['PHP_SELF'];?>?page=frontpage1"><span data-title='Page 1'>Page 1</span></a>
           <a class='link-button roll' href="<?php echo $_SERVER['PHP_SELF'];?>?page=frontpage2"><span data-title='Page 2'>Page 2</span></a>
           <p class="outing">Or you could always <a class='link-button roll' href="closeSession.php"><span data-title='GET OUT!!!'>GET OUT!!!</span></a></p>
       </div>
   </div>
</div>