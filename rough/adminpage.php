<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | CI Moguls</title>
    <link rel="stylesheet" href="/dma/css/headerfooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt:wght@100&family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <style>
        h1{
            /* margin-top:20vh; */
        }
    </style>
</head>
<body>
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
    <div class="heading"><h1>Welcome, Admin.</h1></div>
    <div class="freedemo"></div>
    <div class="usersignin"></div>

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

    <script src="/dma/js/index.php"></script>
    <script src="/dma/js/login.php"></script>
</body>
</html>