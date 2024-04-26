<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        .landing{
            display: flex;
            justify-content: space-between;
        }
        .content{
            margin-top: 100px;
            margin-left: 50px;
        }
        .h2{
        font-size: 80px;
        font-weight: bold;
        line-height: 1.6;
        width: 350px
        }
        .h2 span{
        color: #378CE7;
        font-family: 'Edu NSW ACT Foundation', cursive;
        }
        .p{
        font-size: 20px;
        line-height: 1.6;
        width: 550px;
        padding-top:20px ;
        color: #777;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div class="landing">
        <div class="content">
            <h2 class="h2">Welcome to <span>Delivee</span> - Innovative Shipping Solutions!</h2>
            <p class="p">Delivee delivery management software provides an advance agent tracking system to manage and optimize all your deliveries. Make your delivery process efficient with robust delivery management software.</p>
        </div>
        <div class="img">
        <img src="../images/hom2.jpg" alt="">
        </div>
    </div>
    
</body>
</html>