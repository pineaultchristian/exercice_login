<!doctype html>
<html lang="">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
    <body>
        <div class="main-container">
            <div class="form-container">
                <h1>Please Login</h1>
                    <form action="middleLogin.php" method="post">
                        <ul class='form-list'>
                            <li class='sliding-middle-out'>
                            	<input type="text" name="user" placeholder='Username' required>
							</li>
                            <li class='sliding-middle-out'>
                            	<input type="password" name="password" placeholder='Password' required>
                            </li>
                        </ul>
                        <input type="submit">
                    </form>
       	            <p>Cookies need to be enabled in your browser to login.</p>
       	            <p>Allowed characters: numbers, letters and underscores.</p>
			</div>
		</div>
	</body>
