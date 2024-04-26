<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Conforming</title>
    <style>
        body
        {
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
        }
        h5 a:hover{
            color:#fff;
            text-decoration:none; 
            background-color:#378CE7;
        }
        input{
            width: 100%;
            padding:15px 10px;
            border:none;
            outline:none;
            border-radius: 5px;
            margin-bottom:10px;
        }
        .id{
              text-align: center;
        }
        .id p{
            margin-top:20px;  
        }
        .id a{
            background-color:#008DDA;
            color:#fff;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top:-10px;
        }
        .id a:hover{
            text-decoration:none; 
            background-color:#378CE7;
        }
    </style>
</head>
<body>
    <h1 align='center' style="margin: 30px ; color:#e84118">
    Rest Password
    </h1>
    <hr style=" background-color:#333" />

    <P align='center' style="font-weight: bold;color:#273c75;">The Fastest Courier Service Ever</P>


    <div><h5 ><a href="index.php" >SignIn</a></h5></div>
        <div class="container" style="margin-top: 60px; width:50%;">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color: #273c75; margin-bottom: 50px;">Verify The Following Details</h2>
                    <p style="color:#e84118;">To Reset Your Passwprd⮯⮯</p>
                    <form action="resetpswd.php" method="get">
                            
                        <div class="form-group">
                            <label>Email</label>
                            <br>
                            <input type="email" name="email"  placeholder="Enter emailId" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Verify" />  
                        </div>
                        <div class="id">
                        <p style="color: #e84118;">Don't have an account?
                        <p>⮯⮯</p>
                        <a href="register.php">Register here</a>.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>

<?php

require_once "dbconnection.php";
// require_once "session.php";

if (isset($_REQUEST['submit'])) {

    $email = $_REQUEST['email'];

    $qryy= "SELECT * FROM `login` WHERE `email`='$email'";
    $run= mysqli_query($dbcon,$qryy);
    $row= mysqli_num_rows($run);
    if($row<1){
        ?>
        <script>alert("Opps! Email not matched..Try again or Create New One");
            window.open('resetpswd.php','_self');
        </script>   <?php
    }
    else{
        $data= mysqli_fetch_assoc($run);
        $id=$data['u_id'];
        session_start();
        $_SESSION['gid']=$id;
        
        ?>  <script>
              
            window.open('reset.php','_self');
            </script>
        <?php
        

    }
}
    
?>