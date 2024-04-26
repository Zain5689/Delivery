<!-- when admin click delete user link, it displays all users with delete option -->
<?php
    session_start();
    if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>

<?php
include('head.php');
?>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    
<style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");
</style>
</head>

<body style="background-color:white">
<!-- <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto " style = " font-weight: bold">
                <a href="dashboard.php" class="nav-item nav-link " style="font-size:18px; margin-left:-330px">BackToDashboard</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="logout.php" class="nav-item nav-link"
                style="background-color: #ef5350; padding: 8px; color: white ;border-radius: 15px;margin-right:50px"
                >LogOut</a>
            </div>
        </div>
    </nav> -->

<div class="admintitle" style="background-color:white">
    <div>
    <h5 ><a href="dashboard.php" style="float: left; margin-left:20px; color:#378CE7; text-decoration:none;font-size:25px">BackToDashboard</a></h5>
    <h5 ><a class="link" href="logout.php" style="float: right; margin-right:20px; color:aliceblue; text-decoration:none;">LogOut</a></h5>
    </div>
    <!-- <h1 align="center" style="color:black ; font-family: sans-serif;">Showing All Users</h1> -->
    </div>
    <h1 align="center" style="color:black ; font-family: sans-serif; margin-top:30px ;margin-bottom:50px">Showing All Users</h1>


    <table class="table bg-light" style="width:980px; margin-left:190px; font-size:17px ">
    <thead align="center">
        <tr>
        <th scope="col">No.</th>
        <th scope="col">Users Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    
    <?php

        include('../dbconnection.php');

        $qry= "SELECT * FROM `users`"; //AND `name` LIKE '%name%'
        $run= mysqli_query($dbcon,$qry);

        if(mysqli_num_rows($run)<1){
            echo "<tr><td colspan='6'>There is no Data in Database</td></tr>";
        }
        else{
            $count=0;
            while($data=mysqli_fetch_assoc($run))
            {
                $count++;
            ?>
            <tr align="center">
                <td><?php echo $count; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><a style="color:red;" href="usersdeleted.php?emm=<?php echo $data['email']; ?>">DeleteUser</a></td>
            </tr>
            <?php
            }
        }
    
    ?>

    </tbody>
</table>
<!-- <div style="overflow-x:auto;">
<table width='80%' border="1px solid" style="margin-left: auto; margin-right:auto; margin-top:30px; font-weight:bold;border-collapse: collapse;">
    <tr style="background-color: indigo;">
        <th>No.</th>
        <th>Users Name</th>
        <th>Email Id</th>
        <th>Action</th>
    </tr>

</table>
</div> -->
</body>