<!-- when admin click delete data link, page with filter options-->
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


<div class="admintitle">
    <div>
    <h5 ><a href="dashboard.php" style="float: left; margin-left:20px; color:#378CE7; text-decoration:none;font-size:25px">BackToDashboard</a></h5>
    <h5 ><a class="link" href="logout.php" style="float: right; margin-right:20px;">LogOut</a></h5>
    </div>
    
    
    </div>
    <h1 align='center' style="color:black ; font-family: sans-serif; margin-top:30px ;margin-bottom:50px">Search Data Information</h1>
    <div style="overflow-x:auto;">
    <table  width='80%' style="margin-left: auto; margin-right:auto; margin-top:30px; font-weight:bold;border-collapse: collapse; background-color: #f8f9fa;border-top: 1px solid #dee2e6;">
    <tr  style="width:980px; margin-left:190px; font-size:17px;border-top: 1px solid #dee2e6;">
            <th style="padding: 20px;vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;">No.</th>
            <th style="padding: 20px;vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;">Items Image</th>
            <th style="padding: 20px;vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;">Sender Name</th>
            <th style="padding: 20px;vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;">Receiver Name</th>
            <th style="padding: 20px;vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;">Sender Email</th>
            <th style="padding: 20px;vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;">Action</th>
    </tr>

    <?php
    include('../dbconnection.php');

    $qryd= "SELECT * FROM `courier`";
    $run= mysqli_query($dbcon,$qryd);

    if(mysqli_num_rows($run)<1){
        echo "<tr><td colspan='6'>No record found..</td></tr>";
    }
    else{
        $count=0;
        while($data=mysqli_fetch_assoc($run))
        {
            $count++;
        ?>
        <tr align="center" style="font-size:18px;">
            <td><?php echo $count; ?></td>
            <td><img src="../dbimages/<?php echo $data['image']; ?>" alt="pic" style="max-width: 100px;"/> </td>
            <td><?php echo $data['sname']; ?></td>
            <td><?php echo $data['rname']; ?></td>
            <td><?php echo $data['semail']; ?></td>
            <td><a href="datadeleted.php?bb=<?php echo $data['billno']; ?>"
            style="color:black;">Delete</a></td>
        </tr>
        <?php
        }
    }
    ?>
</table>
</div>
