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


<?php echo'<h3 id="clientname">Hello '.$name.'</h3>' ?>



<?php
        session_start();
        if(isset($_POST["logout"])){
            session_destroy();
            header("location: login.php");
            exit;
        }
    ?>