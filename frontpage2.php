<?php 

    if (!isset($_SESSION["user"])) {
        header ("Location: homelogin.php");
    }
    
    session_regenerate_id();
?>

<div class="main-container page2">
    <div class="page-container">
        <div class="content">
            <h1>Alright <?php echo $username ?>, last page!</h1>
            <p>Hope you didn't get lost. If so I'll give you a hint: you're on the second page of a two pages site.</p>
            <p>If you're still lost, go back to the <span class='inside-link'><a class='in-phrase' href="<?php echo $_SERVER['PHP_SELF'];?>">starting point</a></p>
            <p>If not... go back to the <span class='inside-link'><a class='in-phrase' href="<?php echo $_SERVER['PHP_SELF'];?>">starting point</a></p>
            <p class="outing">Or, as always, you could always <a class='link-button roll' href="closeSession.php"><span data-title='GET OUT!!!'>GET OUT!!!</span></a></p>
        </div>
    </div> 
</div>