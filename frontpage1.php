<?php 

    if (!isset($_SESSION["user"])) {
        header ("Location: homelogin.php");
    }
    
    session_regenerate_id();
?>

<div class="main-container page1">
    <div class="page-container">
        <div class="content">
            <h1>And this is page 1 <?php echo $username ?></h1>
            <p>Not much to see I know but still prettier than the previous version right?</p>
            <a class='link-button roll' href="<?php echo $_SERVER['PHP_SELF'];?>?page=frontpage2"><span data-title='Go to the second page?'>Go to the second page?</span></a>
            <a class='link-button roll' href="<?php echo $_SERVER['PHP_SELF'];?>"><span data-title='Back to home?'>Back to home?</span></a>
            <p class="outing">Or you could always <a class='link-button roll' href="closeSession.php"><span data-title='GET OUT!!!'>GET OUT!!!</span></a></p>
        </div>
    </div> 
</div>

