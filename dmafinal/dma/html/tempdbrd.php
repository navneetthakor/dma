<?php
    session_start();
    $name = $_SESSION['username'];
    $_SESSION['logout']=false;
?>

<?php
    require 'dbconnect.php';
    //php for insertion of link in division of dashboard 
    $sql = "Select * from `users` where `username` ='$name'";
    $result = mysqli_query($conn,$sql);
    $getrow = mysqli_fetch_assoc($result); 
    $getga4id = $getrow['ga4_link'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt:wght@100&family=Ubuntu&display=swap" rel="stylesheet">
    <title>Dashboard | CI Moguls</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        #sec1 {
            width: 100vw;
            height: 100vh;
            display: flex;
        }

        /* left division styling  */
        #left {
            width: 20%;
            background-color: #342eadc7;
            display: flex;
            flex-direction: column;
        }

        /* client details of left division */
        #leftd1 {
            height: 10%;
            background-color:rgba(85, 107, 47, 0.765);
            color: white;
            display: flex;
            flex-direction: row;
        }

        #leftd1 img {
            width: 6vh;
            height: 6vh;
            margin-top: 2vh;
            margin-left: 2vw;
            border: 2px solid black;
        }

        #leftd1 h3 {
            margin-top: 3vh;
            margin-left: 2vw;
            font-size: 3vh;
        }


        /* tabs of left division */
        #leftd2 {
            display: flex;
            flex-direction: column;
        }

        #leftd2 input[type=button] {
            height: 10vh;
            font-size: 2.5vh;
            cursor: pointer;
            /* border: none; */
        }

        .corang {
            color: orangered;
        }

        /* right division styling  */
        #right {
            width: 80%;
        }

        #rcontainer {
            width: 80%;
            height: 80%;
            margin-top: 7%;
            margin-left: 10%;

        }

        /* analytics part in right container  */
        #ranlytic {
            height: 48%;
            width: 100%;
            background-color: blueviolet;
            /* background-color: whitesmoke; */
            color: white;
            /* color: black; */
            border-radius: 8px;
            text-align: center;
            font-size: 2vh;
            box-shadow: 7px 7px 20px black;
        }

        /* remaining part of the container  */
        #rcont2 {
            margin-top: 2%;
            height: 48%;
            width: 100%;
            border-radius: 8px;
            display: flex;
        }

        #rcont2 div {
            text-align: center;
            font-size: 3vh;
            height: 100%;
            width: 48%;
            background-color: mediumvioletred;
            color: white;
            border-radius: 8px;
            box-shadow: 7px 7px 20px black;
        }

        #rcont2 div:first-child {
            margin-right: 3%;
            background-color: darkolivegreen;
        }

        .plansmain{
            display: none;
        }
    </style>
</head>

<body>
    <section id="sec1">
        <div id="left">
            <div id="leftd1">
                <img src="/dma/images/DSTAPES.png" alt="client_img" id="clientimg">
                <?php echo'<h3 id="clientname">Hello '.$name.'</h3>' ?>
            </div>
            <div id="leftd2">
                <input type="button" value="Dashboard"  id="ldesh" name="dashboard" class=" lbtn corang" onclick="dash()">
                <input type="button" value="Plans" id="lplans" name="plans" class="lbtn" onclick="plans()" >
                <input type="button" value="Logout" id="llogin" class="lbtn" name="logout" onclick="logout()">
            </div>
        </div>

        <!--right screen division starts here-->

        <div id="right">
            <div id="rcontainer">
                <div id="ranlytic">
                    <h2>Analytics</h2>
                    <!-- <div id="windowContainer"></div> -->
                            <!-- <button onclick="openWindow()">Open Window</button> -->
                    
                </div>
                <div id="rcont2">
                    <div id="rcont2d1">
                        Ad spent
                    </div>
                    <div id="rcont2d2">
                        Influencers
                    </div>
                </div>

            </div>
            <!--make div for plans-->
            <div class="mainplan">

            </div>
            
    </section>

    <script>
        function plans()
        {
           lall = document.getElementsByClassName('lbtn'); 
            lall = Array.from(lall);

            lall.forEach(element => {
                element.classList.remove('corang')
            });
            lall = document.getElementsByClassName('lbtn')[1].classList.add('corang'); 
           
           var rcontainer = document.getElementById('rcontainer');
           rcontainer.style.display="none";  

           window.open("/dma/html/dbplans.php","_blank");
        }

        function dash()
        {
            lall = document.getElementsByClassName('lbtn'); 
            lall = Array.from(lall);

            lall.forEach(element => {
                element.classList.remove('corang')
            });
            lall = document.getElementsByClassName('lbtn')[0].classList.add('corang'); 

           var rcontainer = document.getElementById('rcontainer');
           rcontainer.style.display="block"; 
        }

        function logout()
        {
            lall = document.getElementsByClassName('lbtn'); 
            lall = Array.from(lall);

            lall.forEach(element => {
                element.classList.remove('corang')
            });
            lall = document.getElementsByClassName('lbtn')[2].classList.add('corang');
            window.open("/dma/html/index.php","_self");  
        }
        function openWindow(){
            var windowContent = '<h2>Window Content Goes Here</h2>';
            document.getElementById('windowContainer').innerHTML = windowContent;
        }
    </script>
    <?php
        session_start();
        if(isset($_POST["logout"])){
            session_destroy();
            header("location: login.php");
            exit;
        }
    ?>
</body>

</html>