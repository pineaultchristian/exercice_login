<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
       

            <!-- <ul>
              <li><a href="<?php echo $_SERVER['PHP_SELF'];?>">Home</a></li>
              <li><a href="<?php echo $_SERVER['PHP_SELF'];?>?page=frontpage1">Page One</a></li>
              <li><a href="<?php echo $_SERVER['PHP_SELF'];?>?page=frontpage2">Page Two</a></li>
          </ul>   -->
            <!-- dynamic content start here -->
            <div class="content">
                <?php
            $username = 'Jack';


  // create an array of allowed pages
  $allowedPages = array('frontpage1', 'frontpage2');
  
  // check if the page variable is set and check if it is the array of allowed pages
  if(isset($_GET['page']) && in_array($_GET['page'], $allowedPages)) {
    // first check that the file exists
    if(file_exists($_GET['page'].'.php')) {
        //  If all is well, we include the file
        include_once($_GET['page'].'.php');
        } else {
        // A little error message if the file does not exist
        echo 'No such file exists';
        }
        // if somebody typed in an incorrect url
    } else {
        // if things are not as they should be, we included the default page
        if(file_exists('fronthome.php')) {
        // include the default page 
            include_once('fronthome.php');
        } else {
            // if the default page is missing, we have a problem and it needs to be fixed.
            echo 'fronthome.php is missing. Please fix me.';
        }
    }

?>

            </div>
                

            <!-- dynamic content ends here -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
