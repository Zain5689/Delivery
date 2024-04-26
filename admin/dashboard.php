<!-- admin dashbord page with options for admin -->

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
<style>
    body {
        background-image: url('../images/bg.jpg');
        background-size: cover;
        font-family: Arial, Helvetica, sans-serif;

        }
    form{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }
    input{
        padding: 10px 15px;
        background-color: #135D66;
        color: aliceblue;
        font-size: 20px; 
        border: none;
        border-radius: 10px;
    }

</style>

<div class="admintitle">
    <div>
    <h5 ><a href="../index.php" style="float: left; margin-left:20px; color:#378CE7; text-decoration:none;font-size:25px">LoginAsUser</a></h5>
    <h5 ><a class="link" href="logout.php" style="float: right; margin-right:20px; ">LogOut</a></h5>
    </div>
</div>
<h1 align='center' style="color:black ; font-family: sans-serif; margin-top:30px ;margin-bottom:50px">Welcome To Admin Dashbord</h1>
<div align="center" style="margin-top:240px;">
<form style="position: center;color:lightblue;font-weight:bold;font-size:50px">
    
    <!-- <a href="insertdata.php">Insert Data</a><br><br> -->

    <!-- <a href="updatedata.php">Update Data</a><br><br> -->

    <a href="deletedata.php" style="text-decoration: none;
    color: aliceblue; position: relative;top: -200px;"><input type="button"  value="Delete Data"></a><br><br>

    <a href="deleteusers.php"  style="text-decoration: none;
    color: aliceblue; position: relative;top: -200px;"><input type="button"   value="Delete Users"></a><br><br>
</form>

</div>
</body>
</html>