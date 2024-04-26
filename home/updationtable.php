<?php
session_start();
if(!isset($_SESSION['uid'])){
    header('location: ../index.php');
    exit(); // Add exit() to stop further execution
}

include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Courier Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        form {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #A4ABBD;
            color: #fff;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="file"] {
            width: calc(100% - 16px);
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 140px;
            padding: 10px;
            background-color: orange;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            color: #fff;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #ff7f00;
        }
    </style>
</head>
<body>
<form action="editdata.php" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <th colspan="2">SENDER</th>
            <th colspan="2">RECEIVER</th>
        </tr>
        <tr>
            <th colspan="2"></th>
            <th colspan="2"></th>
        </tr>
        <tr>    
            <td>Name:</td><td><input type="text" name="sname" value="<?php echo isset($data['sname']) ? $data['sname'] : ''; ?>" required></td>
            <td>Name:</td><td><input type="text" name="rname" value="<?php echo isset($data['rname']) ? $data['rname'] : ''; ?>" required></td>
        </tr>
        <tr>    
            <td>Email:</td><td><input type="text" name="semail" value="<?php echo isset($data['semail']) ? $data['semail'] : ''; ?>" required></td>
            <td>Email:</td><td><input type="text" name="remail" value="<?php echo isset($data['remail']) ? $data['remail'] : ''; ?>" required></td>
        </tr>
        <tr>
            <td>PhoneNo.:</td><td><input type="number" name="sphone" value="<?php echo isset($data['sphone']) ? $data['sphone'] : ''; ?>" required></td>
            <td>PhoneNo.:</td><td><input type="number" name="rphone" value="<?php echo isset($data['rphone']) ? $data['rphone'] : ''; ?>" required></td>
        </tr>
        <tr>
            <td>Address:</td><td><input type="text" name="saddress" value="<?php echo isset($data['saddress']) ? $data['saddress'] : ''; ?>" required></td>
            <td>Address:</td><td><input type="text" name="raddress" value="<?php echo isset($data['raddress']) ? $data['raddress'] : ''; ?>" required></td>
        </tr>
        
        <tr>
            <td>Weight:</td><td><input type="number" name="wgt" value="<?php echo isset($data['weight']) ? $data['weight'] : ''; ?>" required></td>
            <td>ReceiptNo.:</td><td><input type="number" name="billno" value="<?php echo isset($data['billno']) ? $data['billno'] : ''; ?>" required></td>
        </tr>
        <tr>
            <td>Date:</td><td><input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" /></td>
            <td>Items Image:</td><td><input type="file" name="simg" value="<?php echo isset($data['image']) ? $data['image'] : ''; ?>" ></td>
        </tr>
        <tr>
            <input type="hidden" name="idd" value="<?php echo isset($data['c_id']) ? $data['c_id'] : ''; ?>" />
            <td colspan="4" align="center"><input type="submit" name="submit" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>
