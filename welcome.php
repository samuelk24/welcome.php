<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css"> 
    
*{
    background-color:white;
}


}
</style>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        .bounce{
            position: absolute;
            width: 100%;
            height: 100%;
            margin: 0;
            line-height: 50px;
            text-align: center;
            -moz-transform: translateX(50%);
            -webkit-transform: translateX(50%);
            transform: translateX(50%);
            -moz-animation: bouncing-text 5s linear infinite alternate;
            -webkit-animation: bouncing-text 5s linear infinite alternate;
            animation: bouncing-text 10s linear infinite alternate;
        }
        
        @-moz-keyframes bouncing-text {
            0% {
                -moz-transform: translateX(50%);
            }
            100% {
                -moz-transform: translateX(-50%);
            }
        }
        
        @-webkit-keyframes bouncing-text {
            0% {
                -webkit-transform: translateX(50%);
            }
            100% {
                -webkit-transform: translateX(-50%);
            }
        }
        
        @keyframes bouncing-text {
            0% {
                -moz-transform: translateX(50%);
                -webkit-transform: translateX(50%);
                transform: translateX(50%);
            }
            100% {
                -moz-transform: translateX(-50%);
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
            }
        }
    </style>
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        <a id ="home" href="index.php">Home</a>
       
    </p>
   
</body>

<marquee behavior="scroll" direction="right" scrollamount="3" >
   
<img src="images/bakery.jpg" alt="bakery" width="300" height="200">
<img src="images/camera.jpg" alt="cameras" width="300" height="200">
<img src="images/cameraroll.jpg" alt="cameras" width="300" height="200">
<img src="images/cctv.jpg" alt="cameras" width="300" height="200">
<img src="images/gamepads.jpg" alt="cameras" width="300" height="200">
<img src="images/homecctv.jpg" alt="cameras" width="300" height="200">
<img src="images/Mac-products.jpg" alt="cameras" width="300" height="200">
<img src="images/microphone.jpg" alt="cameras" width="300" height="200">
<img src="images/samasung_s7.jpg" alt="cameras" width="300" height="200">
<img src="images/wall-cctv.jpg" alt="cameras" width="300" height="200">
<img src="images/wirelesmouse.jpg" alt="cameras" width="300" height="200"></p>
</marquee>
</div>
<div><marquee behavior="scroll" direction="left" scrollamount="3">

<img src="images/huawei.jpg" alt="bakery" width="300" height="00">
<img src="images/marriage_cake.jpg" alt="cameras" width="300" height="200"> 
<img src="images/graduation-cake.jpg" alt="cameras" width="300" height="200">
<img src="images/candy_cakes.jpg" alt="cameras" width="300" height="200">


</marquee>

</html>