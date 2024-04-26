<!-- admin logIn page and login logic -->
<?php

session_start();
if (isset($_SESSION['uid'])) {

    header('location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body{
            font-weight: bold;
            font-family: system-ui;
            background-color:#eee;
        }
        h5 a{
            background-color:#008DDA;
            color:#fff;
            padding: 10px 20px;
            border-radius: 5px;
            float: right;
            margin-right:40px;
            margin-top:0px;
            text-decoration:none;
            font-size:20px ; 
        }
        form{
            width: 80%; 
            margin: auto;
            justify-content: center;
            align-items: center;
        }
        form #btn{
            width: fit-content;
            margin:20px auto;
            display:flex;
            justify-content: center;
            align-items: center;
            background-color:#378CE7;
            color:#fff;
            padding:10px 20px;
            border-radius: 5px;
           
        }
        form input{
            margin:0 auto;
            display:flex;
            justify-content: center;
            align-items: center;
            width: 50%;
            padding: 10px 0;
            border:none;
            outline:none;
        }
        form label{
            width: 56%;
            display:flex;
            justify-content: center;
            align-items: center;
        }
    </style>    
</head>

<body>
    <h5><a href="../index.php" >Back To Home</a></h5><br>
    <h1 align='center' style="color: #008DDA;font-size:60px">Admin Login</h1>
    <form action="adminlogin.php" method="POST">

            <label> Email_ID: </label>
            <br>
            <input type="email" name="uname" require>
            <br>
            <label>Password:</label>
            <br>
            <input type="password" name="pass" require>
            <br>
            <input type="submit" id="btn" name="login" value="Login" style="cursor: pointer;">
    </form>
</body>

</html>

<?php

include('../dbconnection.php');
if (isset($_POST['login'])) {
    $ademail = $_POST['uname'];
    $password = $_POST['pass'];
    $qry = "SELECT * FROM `adlogin` WHERE `email`='$ademail' AND `password`='$password'";
    $run = mysqli_query($dbcon, $qry);
    $row = mysqli_num_rows($run);
    if ($row < 1) {
        ?>
        <script>
            window.open('adminlogin.php', '_self');
        </script><?php
    }
    else {
        $data = mysqli_fetch_assoc($run);
        $id = $data['a_id'];
        $_SESSION['uid'] = $id;
        header('location:dashboard.php');
    }
}
?>