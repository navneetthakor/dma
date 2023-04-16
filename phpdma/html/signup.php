<?php
        $alert=false;
        $error=false;
        $exist=false;
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            require 'dbconnect.php';
            $username=$_POST["username"];
            $email=$_POST["email"];
            $password=$_POST["pswd"];
            $srno=1;
            $sql = "Select * from `users` where `email`='$email'";
            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);
            if($num>0){
               $exist=true; 
            }
            if($exist==false){
                $sql= "INSERT INTO `users` (`srno`,`username`, `email`, `password`, `date`) VALUES ('$srno', '$username', '$email', '$password', current_timestamp())";
                $result = mysqli_query($conn,$sql);
                if($result){
                    $alert=true;
                }
            }
            else{
                // $error=true;
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
    <link rel="stylesheet" href="/dma/css/signup.css">
</head>

<body>
    <?php
      if($alert){
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congratulations!</strong> You can now login to your dashboard.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }
    //   if($error){
    //     echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //     <strong>Oops!!!</strong> You have added information incorrectly. Re-enter the details.
    //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //     </div>';
    //   }
      if($exist){
        echo '<script>alert("Wrong email");</script>';
      }
    ?>
    <div class="signupcenter" id="sc">
        <div class="signup" id="signup">
            <span><a href="/dma/html/login.php">&#10539;</a></span>
            <div class="intro">
                <p>&#9735;</p>
                <p id="welcome">Create Account</p>
                <p>Shake a firm hand with us</p>
                
            </div>
            <div class="logindetails">
                <form action="/dma/html/signup.php" name="signupform" onsubmit="return signupentry(event)" method="post">
                    <div class="names"> Username&nbsp;
                        <input type="text" name="username" id="signup_usrnme">
                    </div>
                    <div class="email">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="pass">Password&nbsp;&nbsp;
                        <input type="password" name="pswd" id="signup_pwd">
                    </div>
                    <input type="submit" value="Create &#8680;">
                </form>
            </div>
        </div>
    </div>
    <script src="/dma/js/login.php"></script>

</body>

</html>