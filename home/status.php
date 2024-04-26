<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>
<?php include('header.php');
    include('../dbconnection.php');
    $idd = $_GET['sidd'];

    $qryy= "SELECT * FROM `courier` WHERE `c_id`='$idd'";
    $run= mysqli_query($dbcon,$qryy);
    $data=mysqli_fetch_assoc($run);
    $stdate = $data['date'];
    $tddate= date('Y-m-d');

    if($stdate==$tddate){
        ?>
        <h1 style="margin: 100px;background-color:#BED7DC;text-align:center;    font-size: 30px; border-radius: 10px;padding:20px;line-height: 2">Status >> On The Way...</h1>
        <br/><hr/>
        <div align='center'>
        <button onclick="window.location.href='trackMenu.php'" style="  background-color: #135D66;
        height: 60px;
        width: 130px;
        border-radius: 15px;
        cursor: pointer;
        color: white;
        font-size: 16px;
        font-weight: bold;
        border: none;
        outline: none;
        padding: 6px 30px">GoBack</button>
        </div>
        <?php 
    }
    else{
        ?>
        <h1 style="margin: 100px;background-color:#BED7DC;text-align:center;    font-size: 30px; border-radius: 10px;padding:20px;line-height: 2;box-shadow: 3px 5px 7px rgba(0, 0, 0, 0.4)">Status >> Items Delivered..<br /><p>HAVE A NICE DAY</p></h1>
        <br/><hr/>
        <div align='center'>
        <button onclick="window.location.href='trackMenu.php'" style="  background-color: #135D66;
        height: 60px;
        width: 130px;
        border-radius: 15px;
        cursor: pointer;
        color: white;
        font-size: 16px;
        font-weight: bold;
        border: none;
        outline: none;
        padding: 6px 30px">Go Back</button>
        </div>
        <?php
    }
?>


