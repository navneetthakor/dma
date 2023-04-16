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
    $get_ga4_id = $getrow['ga4_link'];
    $get_fb_id = $getrow['fb_link'];
    $get_linked_in_id = $getrow['linkedin_link'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dma/css/plnasfordesb.css"> 
    <!-- link again if not run -->
    
    <title>Deshboard | CI Moguls</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            /* width: 100vw; */
            overflow-x: hidden;
            overflow-y: hidden;
        }

        #sec1 {
            width: 100vw;
            height: 100vh;
            display: flex;
        }

        /* left division styling  */
        #left {
            width: 20%;
            background-color: #070176;
            display: flex;
            flex-direction: column;
        }

        /* client details of left division */
        #leftd1 {
            height: 10%;
            background-color: rgba(85, 107, 47, 0.765);
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
            background-color: whitesmoke;
        }

        .corang1 {
            color: White;
            background-color: #070176;
        }

        /* right division styling  */
        #right {
            width: 80%;
            /* background-color: whitesmoke; */
        }

        #rcontainer1 {
            width: 80%;
            height: 80%;
            margin-top: 7%;
            margin-left: 10%;
            /* border: 2px solid red; */

        }

        /* right div heading  */
        #rheddesh {
            text-align: center;
            font-size: large;
            color: rgb(185, 7, 90);
            font-weight: 550;
        }

        /* all three tabs in right gg,fb,ldin  */
        #rincont1 {
            width: 100%;
            height: 80%;
            margin-top: 5%;
        }

        #rincont1 a>div {
            width: 100%;
            height: 20%;
            margin-top: 5%;
            background-color: white;
            border-bottom-left-radius: 23px;
            box-shadow: 2px 2px 10px black;
            display: flex;
        }

        #rincont1 a{
            text-decoration: none;
        }

        /* right tabs image styling */
        .imgdiv img {
            height: 100%;
            width: 100%;
        }

        .imgdiv {
            /* border: 2px solid red; */
            height: 60%;
            width: 8%;
            margin-top: 2%;
            margin-left: 2%;
        }

        .logoname {
            /* border: 2px solid red; */
            height: 40%;
            width: 40%;
            margin-top: 3%;
            margin-left: 2%;
            font-weight: 550;
            font-size: 3vh;
            text-align: left;
            padding-left: 5%;
            color: #070176;
        }


        /* plans container styling */
       .disn{
        display: none;
       }
       .s1cardb input{
        height: 40%;
       }
       /* .s1cardb input[type="button"]{
        color: white;
        background-color: white;
        border: 0px white;
    } */
    .whitebtns{
        color: white;
        background-color: white;
        border: 0px white;
       }
    /* specific card styling  */
    /* #s1d3d2d2 input{
        background-color: white;
        color: white;
    } */
    /* #s1d3d3d1{
        color: black;
    }
    #s1d3d3d2 input{
        background-color: white;
        color: white;
    } */
    </style>
</head>

<body>

<?php
// $keyId='rzp_test_emivQ1bysPvsM2'; 
// $keySecret='kaLC4YfrPDosaIDw3cbWCpzt';
//  $apikey = new Api($key_id, $secret);
?> 
    <section id="sec1">
        <div id="left">
            <div id="leftd1">
                <img src="/images/DSTAPES.png" alt="" id="clientimg">
                <?php echo'<h3 id="clientname">Hello '.$name.'</h3>' ?>
            </div>
            <div id="leftd2">
                <input type="button" value="Dashboard" id="ldesh" class=" lbtn corang" onclick="desh()">
                <input type="button" value="Plans" id="lplans" class="lbtn corang1" onclick="plans()">
                <input type="button" value="Logout" id="llogin" class="lbtn corang1" onclick="logout()">
            </div>
        </div>
        <div id="right">
            <div id="rcontainer1" >

                <!-- deshboard mode  -->
                <!-- heading -->
                <div id="rheddesh">
                    <h2>Dashboard</h2>
                </div>

                <!-- tabs to navigate analytics  -->
                <div id="rincont1">
                    <!-- <a href="https://analytics.google.com/analytics/web/#/p327629763/reports/intelligenthome" target="_blank"> -->
                        <?php
                            echo '<a href="'.$get_ga4_id.'" target="_blank">
                        
                        <div id="google">
                            <div class="imgdiv">
                                <img src="../images/ga42.png" alt="">
                            </div>
                            <div class="logoname">Google analytics</div>
                        </div>
                    </a>';?>

                    <?php
                        echo '<a href="'.$get_fb_id.'" target="_blank">
                        <div id="fb">
                            <div class="imgdiv">
                                <img src="../images/fblogo.png" alt="">
                            </div>
                            <div class="logoname">Fecebook Ads Manager</div>
                        </div>
                    </a>';
                    ?>

                    <?php
                        echo '<a href="'.$get_linked_in_id.'" target="_blank">
                        <div id="ldin">
                            <div class="imgdiv">
                                <img src="../images/ldinlogo.png" alt="">
                            </div>
                            <div class="logoname">LinkedIn Ads Manager</div>
                        </div>
                    </a>';
                    ?>
                    
                </div>
            </div>

            <!-- plans right container -->
            <div id="rcontainer2" class="disn">
                    <div id="s1div1">
                        <h1>Plans</h1>
                    </div>
        
                    <!-- boxes of plans  -->
                    <div id="s1div3">
                        <div id="s1d3d1">
                            <div id="s1d3d1d1" class="s1cardh ">
                                Silver
                            </div>
                            <div id="s1d3d1d2" class="s1cardb">
                                <h3>&#8377;20000/mo</h3>
                                <h4>Search engine marketing</h4>
                                <h4>Social media marketing</h4>
                                <h4>Social media Optimization</h4>
                                <!-- <input type="button" value="Get Started"> -->
                                <form action="" method="POST">
                                <script
                                    src="https://checkout.razorpay.com/v1/checkout.js"
                                    data-key= "<?php echo $apikey ?>"
                                    data-amount="20000" 
                                    data-currency="INR"
                                    data-order_id="order_CgmcjRh9ti2lP7"
                                    data-buttontext="Pay"
                                    data-name="Acme Corp"
                                    data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
                                    data-image="https://example.com/your_logo.jpg"
                                    data-prefill.name="Gaurav Kumar"
                                    data-prefill.email="gaurav.kumar@example.com"
                                    data-theme.color="#F37254"
                                ></script>
                                <input type="hidden" custom="Hidden Element" name="hidden"/>
                                <input type="button" value="Get Started" class="whitebtns">
                                </form>
                            </div>
                        </div>
        
                        <div id="s1d3d2">
                            <div id="s1d3d2d1" class="s1cardh ">
                                Golden
                            </div>
                            <div id="s1d3d2d2" class="s1cardb">
                                <h3>&#8377;35000/mo</h3>
                                <h4>SEM/SEO</h4>
                                <h4>SMM/SMO</h4>
                                <h4>Influencer Marketing</h4>
                                <form action="" method="POST">
                            <script
                                src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key= "<?php echo $apikey ?>"
                                data-amount="35000" 
                                data-currency="INR"
                                data-order_id="order_CgmcjRh9ti2lP7"
                                data-buttontext="Pay"
                                data-name="Acme Corp"
                                data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
                                data-image="https://example.com/your_logo.jpg"
                                data-prefill.name="Gaurav Kumar"
                                data-prefill.email="gaurav.kumar@example.com"
                                data-theme.color="#F37254"
                            ></script>
                            <input type="hidden" custom="Hidden Element" name="hidden"/>
                            <input type="button" value="Get Started" class="whitebtns">
                            </form>
                            </div>
                        </div>
        
                        <div id="s1d3d3">
                            <div id="s1d3d3d1" class="s1cardh ">
                                Platinum
                            </div>
                            <div id="s1d3d3d2" class="s1cardb">
                                <h3>&#8377;70000/mo</h3>
                                <h4>SEM/SEO</h4>
                                <h4>SMM/SMO</h4>
                                <h4>IM/Content marketing </h4>
                                <form action="" method="POST">
                                <script
                                    src="https://checkout.razorpay.com/v1/checkout.js"
                                    data-key= "<?php echo $apikey ?>"
                                    data-amount="70000" 
                                    data-currency="INR"
                                    data-order_id="order_CgmcjRh9ti2lP7"
                                    data-buttontext="Pay"
                                    data-name="Acme Corp"
                                    data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
                                    data-image="https://example.com/your_logo.jpg"
                                    data-prefill.name="Gaurav Kumar"
                                    data-prefill.email="gaurav.kumar@example.com"
                                    data-theme.color="#F37254"
                                ></script>
                                <input type="hidden" custom="Hidden Element" name="hidden"/>
                                <input type="button" value="Get Started" class="whitebtns">
                                </form>
                                <!-- <input type="button" value="Get Started" onclick=""> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function plans() {
            lall = document.getElementsByClassName('lbtn');
            lall = Array.from(lall);

            lall.forEach(element => {
                element.classList.remove('corang')
                element.classList.add('corang1')

            });
            lall = document.getElementsByClassName('lbtn')[1].classList.add('corang');
            lall = document.getElementsByClassName('lbtn')[1].classList.remove('corang1');

            var rcontainer1 = document.getElementById('rcontainer1');
            var rcontainer2 = document.getElementById('rcontainer2');
            rcontainer1.classList.add('disn')
            rcontainer2.classList.remove('disn')

            //    window.open("/html/plans.html","_blank");
        }

        function desh() {
            lall = document.getElementsByClassName('lbtn');
            lall = Array.from(lall);

            lall.forEach(element => {
                element.classList.remove('corang')
                element.classList.add('corang1')

            });
            lall = document.getElementsByClassName('lbtn')[0].classList.add('corang');
            lall = document.getElementsByClassName('lbtn')[0].classList.remove('corang1');

            var rcontainer1 = document.getElementById('rcontainer1');
            var rcontainer2 = document.getElementById('rcontainer2');
            rcontainer1.classList.remove('disn')
            rcontainer2.classList.add('disn')
        }

        function logout() {
            lall = document.getElementsByClassName('lbtn');
            lall = Array.from(lall);

            lall.forEach(element => {
                element.classList.remove('corang')
                element.classList.add('corang1')
            });
            lall = document.getElementsByClassName('lbtn')[2].classList.add('corang');
            lall = document.getElementsByClassName('lbtn')[2].classList.remove('corang1');
            window.open("/dma/html/index.php","_self");
        }
    </script>
    <?php
        // session_start();
        if(isset($_POST["logout"])){
            session_destroy();
            header("location: login.php");
            exit;
        }
    ?>
</body>

</html>