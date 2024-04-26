
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Navbar with Logo Image</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@400..700&display=swap" rel="stylesheet">
<style>
    .bs-example{
        margin: 0;
    }

</style>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="home.php" class="navbar-brand" style = "font-size:22px ;color:#378CE7 ;  font-family: 'Edu NSW ACT Foundation', cursive ; padding-left:50px ;font-weight: bold">
            Delivee
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto " style = "font-size:18px ; font-weight: bold">
                <a href="home.php" class="nav-item nav-link active" style = "color:#378CE7" >Home</a>
                <a href="price.php" class="nav-item nav-link ">Price</a>
                <a href="courierMenu.php" class="nav-item nav-link">Courier</a>
                <a href="trackMenu.php" class="nav-item nav-link">Track</a>
                
                <a href="profile.php" class="nav-item nav-link">Profile</a>
                <a href="contactUS.php" class="nav-item nav-link">ContactUs</a>
            </div>
            <div class="navbar-nav ml-auto">
                <!-- <a href="../admin/logout.php" class="nav-item nav-link">AdminPage</a> -->
                <a href="../logout.php" class="nav-item nav-link"
                style="background-color: #ef5350; padding: 8px; color: white ;border-radius: 15px;margin-right:50px"
                >LogOut</a>
            </div>
        </div>
    </nav>

</div>
</body>
</html>
<?php include('footer.php'); ?>

