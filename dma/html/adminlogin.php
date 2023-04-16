<?php
    $login=false;
    $error=false;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        require 'dbconnect.php';
        $username=$_POST["username"];
        $password=$_POST["pswd"];
        if(($username=="AdminNR") && ($password=="@dmin123")){
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
			header("Location: admin_dashboard.php");
			exit();
        }
        else{
            $error="Invalid details specified.";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Rokkitt:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/dma/css/login.css">
</head>

<body>
    <?php
        if($error){
            echo '<script>alert("Wrong admin username or password. Re-enter details correctly");</script>';
        }
    ?>
    <div class="logincenter" id="lc">
        <div class="login">
            <span><a href="/dma/html/index.php">&#10539;</a></span>
            <div class="intro">
                <p>&#9735;</p>
                <p id="welcome">Welcome!</p>
                <p>Log in to your account</p>
            </div>
            <div class="logindetails">
                <form action="/dma/html/adminlogin.php" name="userloginform" onsubmit="checkuser()" method="POST">
                    <div class="names"> Userame&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="pass">Password &nbsp;&nbsp;
                        <input type="password" name="pswd" id="password">
                    </div>
                    <input type="submit" value="Login &#8680;">
                </form>
            </div>
        </div>
    </div>

    <script src="/dma/js/login.php"></script>

</body>

</html>