<?php
    session_start();
    $_SESSION['logout']=false;
?>

<?php
    require 'dbconnect.php';
    $sql = "SELECT * from `bookfreedemo` WHERE `time` >= DATE_SUB(NOW(),INTERVAL 2 DAY) ";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    
    $sql2 = "SELECT * from `users` WHERE `date` >= DATE_SUB(NOW(),INTERVAL 2 DAY) ";
    $result2 = mysqli_query($conn,$sql2);
    $num2 = mysqli_num_rows($result2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt:wght@100&family=Ubuntu&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: rokkitt;
        }
        body{
            background-color: rgba(158, 137, 239, 0.269);
        }

        h1,h2{
            font-size: 2rem;
            display: block;
            text-align: center;
            margin-top: 2vh;
        }
        th{
            font-size: 24px;
            font-weight: bold;
            color: #342EAD;
        }
        td{
            font-size: 20px;
            font-weight: bold;
            color: rgba(255, 68, 0, 0.725);
        }
        h1 input{
            display: block;
            align-items: right;
            flex-direction: row;
        }
        .freedemo{
            margin: auto;
            margin-top: 5vh;
            height: 70vh;
            width: 70vw;
            background-color: whitesmoke;
            border-radius: 20px;
            overflow: scroll;
        }
        
        .usersignin{
            margin: auto;
            margin-top: 10vh;
            height: 70vh;
            width: 70vw;
            background-color: whitesmoke;
            border-radius: 20px;
            overflow: scroll;
        }
    .showform,.showuser{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    input[type="button"]{
        font-size: 24px;
        cursor: pointer;
        font-weight: bold;
    }
    #btn{
        text-align: right;
        margin-top: 4vh;
        margin-right: 4vw;
    }
    </style>
</head>
<body>
    <h1>
        Welcome, Admin
    </h1>
    <div class="freedemo">
        <h2>Latest free demo submissions : </h2>
        <div class="showform">
            <table border="3px">
                <tr>
                    <th>Sr. no.</th>
                    <th>Fname</th>
                    <th>Lname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Link</th>
                    <th>Message</th>
                    <th>Time</th>
                </tr>
                <?php
                $srno=1;
                if($num>0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<td>'.$srno .'</td>';
                        echo '<td>'.$row['fname'] .'</td>';
                        echo '<td>'.$row['lname'] .'</td>';
                        echo '<td>'.$row['email'] .'</td>';
                        echo '<td>'.$row['phone'] .'</td>';
                        echo '<td>'.$row['link'] .'</td>';
                        echo '<td>'.$row['msg'] .'</td>';
                        echo '<td>'.$row['time'] .'</td>';
                        echo '</tr>';
                        $srno = $srno + 1;
                    }
                }
                
                ?>
            </table>
        </div>
    </div>
    <div class="usersignin">
        <h2>Latest user sign-ins : </h2>
        <div class="showuser">
            <table border="3px">
                <tr>
                    <th>Sr. no.</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Time</th>
                </tr>
                <?php
                $srno=1;
                if($num>0){
                    while($row = mysqli_fetch_assoc($result2)){
                            echo '<tr>';
                            echo '<td>'.$srno .'</td>';
                            echo '<td>'.$row['username'] .'</td>';
                            echo '<td>'.$row['email'] .'</td>';
                            echo '<td>'.$row['date'] .'</td>';
                            echo '</tr>';
                            $srno = $srno + 1;
                        }
                    }
                    
                    ?>
            </table>
        </div>
    </div>
    <div id="btn">
        <input type="button" value="Log out" onclick="logout()">
    </div>
    
    <script>
        function logout(){
            window.open("/dma/html/index.php","_self");
        }
        </script>
    
    <?php
        if(isset($_POST["logout"])){
            session_destroy();
            header("location: login.php");
            exit;
        }
    ?>
</body>
</html>