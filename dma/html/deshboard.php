<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        #rcontainer {
            width: 80%;
            height: 80%;
            margin-top: 7%;
            margin-left: 10%;
            /* border: 2px solid red; */

        }

        /* analytics part in right container 
        #rcontainer > div:first-child::before{
            content: "";
            background: url('../images/dashboard-modern.png') no-repeat center center/cover;
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            opacity: 0.3;
        }
        #ranlytic {
            height: 48%;
            width: 100%;
            color: #070176;
            border-radius: 8px;
            text-align: center;
            font-size: 2vh;
            box-shadow: 7px 7px 20px black;
            position: relative;
        }

        #ranlytic img{
            height: 20%;
            width: 20%;
            margin-top: 5%;
            
        }
        
        remaining part of the container 
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
            background-color: whitesmoke;
            color: black;
            border-radius: 8px;
            box-shadow: 7px 7px 20px black;
        }

        #rcont2 div:first-child {
            margin-right: 3%;
        }

        utility classes
        .metadata{
            color: #070176;
            font-weight: 550;
            font-size: 2.5vh;
            margin-top: 3%;
        } */

        /* right div heading  */
        #rheddesh {
            text-align: center;
            font-size: large;
            color: rgb(185, 7, 90);
            font-weight: 550;
        }

        /* all three tabs in right gg,fb,ldin  */
        #rcont2 {
            width: 100%;
            height: 80%;
            margin-top: 5%;
        }

        #rcont2 a>div {
            width: 100%;
            height: 20%;
            margin-top: 5%;
            background-color: white;
            border-bottom-left-radius: 23px;
            box-shadow: 2px 2px 10px black;
            display: flex;
        }

        #rcont2 a{
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
    </style>
</head>

<body>
    <section id="sec1">
        <div id="left">
            <div id="leftd1">
                <img src="/images/DSTAPES.png" alt="" id="clientimg">
                <h3 id="clientname">Navneet kumar</h3>
            </div>
            <div id="leftd2">
                <input type="button" value="Deshboard" id="ldesh" class=" lbtn corang" onclick="desh()">
                <input type="button" value="Plans" id="lplans" class="lbtn corang1" onclick="plans()">
                <input type="button" value="Logout" id="llogin" class="lbtn corang1" onclick="logout()">
            </div>
        </div>
        <div id="right">
            <div id="rcontainer">
                <!-- <div id="ranlytic">
                    <h2>Analytics</h2>
                    <img src="../images/ga42.png" alt="Google analytics">
                    <div class="metadata">
                        Click here to get the details about how users are interecting with your website.
                    </div>
                </div>
                <div id="rcont2">
                    <div id="rcont2d1">
                        Ad spent
                    </div>
                    <div id="rcont2d2">
                        Influencers
                    </div> -->

                <!-- deshboard mode  -->
                <!-- heading -->
                <div id="rheddesh">
                    <h2>Deshboard</h2>
                </div>

                <!-- tabs to navigate analytics  -->
                <div id="rcont2">
                    <a href="">
                        <div id="google">
                            <div class="imgdiv">
                                <img src="../images/ga42.png" alt="">
                            </div>
                            <div class="logoname">Google analytics</div>
                        </div>
                    </a>

                    <a href="">
                        <div id="fb">
                            <div class="imgdiv">
                                <img src="../images/fblogo.png" alt="">
                            </div>
                            <div class="logoname">Fecebook Ads Manager</div>
                        </div>
                    </a>

                    <a href="">
                        <div id="ldin">
                            <div class="imgdiv">
                                <img src="../images/ldinlogo.png" alt="">
                            </div>
                            <div class="logoname">LinkedIn Ads Manager</div>
                        </div>
                    </a>
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

            var rcontainer = document.getElementById('rcontainer');
            rcontainer.style.display = "none";

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

            var rcontainer = document.getElementById('rcontainer');
            rcontainer.style.display = "block";
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
            window.open("/html/index.html", "_self");
        }
    </script>
</body>

</html>