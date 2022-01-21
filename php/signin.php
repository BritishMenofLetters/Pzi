<!DOCTYPE html>
<html lang="en-hr" and dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chattel Login page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/signin.css" type="text/css">

    <link rel="icon" type="image/x-icon" href="images/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kalam">  
    <script src="https://kit.fontawesome.com/beda31bccd.js" crossorigin="anonymous"></script>

    <script src="scripts/functions.js"></script>

</head>

<body>
<div id="login-box">
        <div class="left">

        </div>

        <div class="right">
            <div id="logo">
                Chattel
            </div>

            <h1>Login</h1>
            <span></span>

            <form method="POST" autocomplete="on" id="login_form" name="login_form" action="login.php">
                <input type="text" name="usern" placeholder="Username" required />
                <input type="password" name="psw" placeholder="Password"  required />
                  
                <p id="signup">
                    <a href="signup.php">Don't have an account?</a>
                </p>
                <?php
                    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if(strpos($fullUrl, "login=db_connect_error") == true){
                        echo "<div class='error'>Could not connect with database!</div>";
                    }
                    if(strpos($fullUrl, "login=error") == true){
                        echo "<div class='error'>Error occurred!</div>";
                    }
                    if(strpos($fullUrl, "login=incorrect") == true){
                        echo "<div class='error'>Incorrect Username/Password</div>";
                    }
                ?>
                <input type="submit" name="submit" value="LOGIN" />
            </form>


        </div>
</body>