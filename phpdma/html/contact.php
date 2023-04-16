<?php
    require 'dbconnect.php';
    $alert=false;
    $error=false;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $pnumber = $_POST["pnumber"];
        $link = $_POST["Web/App"];
        $msg = $_POST["msg"];
        $client;
        $chkbrnd = 'www.';
        if(strpos($link,$chkbrnd) !==false){
            $client="brand";
        }
        else{
            $client="creator";
        }

        $sql="INSERT INTO `contact_form` (`client_type`, `fname`, `lname`, `pno`, `email`, `link`, `msg`, `date`) VALUES ('$client', '$fname', '$lname', '$pnumber ', '$email', '$link', '$msg', current_timestamp())";
        
        $result = mysqli_query($conn,$sql);
        if($result){
            $alert=true;
        }
        else{
            $error=true;
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dma/css/headerfooter.css">
    <link rel="stylesheet" href="/dma/css/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt:wght@100&family=Ubuntu&display=swap" rel="stylesheet">
    <!-- google icons style sheet  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
    <title>Contact Us | CI Moguls</title>
    <style>
        #s5d2ftbtn{
        font-weight: bold;
        font-size: 16px;
        /* display: flex; */
        padding-right: 5vw;
        }
        #s5d2ftbtn input{
            /* padding-left: 20px; */
        }
    </style>
</head>
<body onload="bfocus()">
      <!-- header of website -->
      <header>
        <!-- logo division  -->
        <div id="logo">
            <img src="/dma/images/cilogo.png" alt="CI MOGULS">
        </div>

        <!-- navigastion division  -->
        <div id="navigation">
            <nav>
            <a href="/dma/html/index.php" class="navbar">Home</a>
            <a href="/dma/html/services.php" class="navbar">Services</a>
            <a href="/dma/html/plans.php" class="navbar">Plans</a>
            <a href="/dma/html/contact.php" class="navbar">Contact Us</a>
            </nav>
        </div>
        <div id="hbutton">
            <input type="button" value="Login/Sign up" id="contactus" onclick="poplogin()">
        </div>
    </header>
    <?php
        if($alert){
            echo '<script>alert("Credentials Submitted Successfully.");</script>';
        }
        if($error){
            echo '<script>alert("There seems some issue..Please try again.");</script>';
        }

    
    ?>
    <!-- main  content starts fom here  -->
    <section id="sec1">
        <div id="s1div1">
            <h1 class="hsecondary">Contact Us</h1>

            <div id="s1form">
                    <!-- image division  -->
                    <div id="s5d1">
                        <img src="/dma/images/teamwork.jpg" alt="">
                    </div>
        
                    <!-- form division  -->
                    <div id="s5d2">
                        <div id="s5d2ftbtn">
                            <!-- <input type="button" value="Brand" id="brand" name="brand" onclick="bfocus()">
                            <input type="button" value="Creator" id="creator" name="creator" onclick="cfocus()"> -->
                            <input type="radio" name="client" value="brand">Brand
                            <input type="radio" name="client" value="creator">Creator
                        </div>
                        <hr>
                        <form action="/dma/html/contact.php" name="contact_page_form" method="post">
                            <div id="s5d2d1">
                                <input type="text" name="fname" id="fname" placeholder="First name" required>
                                <input type="text" name="lname" id="lname" placeholder="Last name" required>
                            </div>
                            <div id="s5d2d2">
                                <input type="number" name="pnumber" id="pnumber" placeholder="Phone number">
                                <input type="email" name="email" id="email" placeholder="Email id" required>
                            </div>
                            <div id="s5d2d3">
                                <input type="text" name="Web/App" id="Web/App" placeholder="Website/Socialmedia">
                            </div>
                            <div>
                                <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Message">
                                </textarea>
                            </div>
                            <div>
                                <input type="submit" value="Book Appointment" id="book-reg">
                            </div>
        
                        </form>
                    </div>
            </div>
        </div>

        <!-- image division  -->
        <div id="s1div2">
            <img src="/dma/images/contact.jpg" alt="contact us image">
        </div>
    </section>

    
    <!-- footer starts here  -->
    <footer>
        <div id="flogo">
            <img src="/dma/images/cilogo.png" alt="">
        </div>
        <div id="fcontainer">
            <div id="fcd1">
                <h2>Navigate</h2>
                <a href="">Home</a>
                <a href="">Services</a>
                <a href="">About us</a>
                <a href="">Plans</a>
            </div>
            <div id="fcd2">
                <h2>Get in Touch</h2>
                <h3> <i class="material-icons">&#xe567; </i>&nbsp;  1509,Ramdevpura, near Khankuva, Bhalej road, Anand, Gujarat 388205</h3>
                <h3><i class="material-icons">&#xe554; </i>&nbsp; bussiness@cimoguls.in</h3>
                <h3><i class="material-icons">&#xe554; </i>&nbsp; customercare@cimoguls.in</h3>
                <h3><i class="material-icons">&#xe551; </i>&nbsp; +91 8780905726</h3>
            </div>
            <div id="fcd3">
                <h2>Locate Us</h2>
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1180.1593083922057!2d72.92323211480819!3d22.55269380081014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4e74c03b7749%3A0xab364c66fd4834c!2sBirla%20Vishvakarma%20Mahavidyalaya%20(BVM)!5e0!3m2!1sen!2sin!4v1678513092528!5m2!1sen!2sin" width="150" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </footer>

    <!-- javascript file attached here  -->
    <script src="/dma/js/index.php"></script>
    <script src="/dma/js/login.php"></script>
</body>
</html>