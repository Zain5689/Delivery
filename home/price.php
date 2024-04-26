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
    <title>Pricing</title>
    <style>
        table {
            width: 60%;
            margin: 30px auto;
            border-collapse: collapse;
            border: 1px solid #ddd        
        }
        th {
            background-color: #A4ABBD;
            padding: 10px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        td {
            padding: 10px;
        }
        ol{
            margin: 20px auto;
    width: 50%;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Weight in Kg</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>0-1</td>
            <td>120</td>
        </tr>
        <tr>
            <td>1-2</td>
            <td>200</td>
        </tr>
        <tr>
            <td>2-4</td>
            <td>250</td>
        </tr>
        <tr>
            <td>4-5</td>
            <td>300</td>
        </tr>
        <tr>
            <td>5-7</td>
            <td>400</td>
        </tr>
        <tr>
            <td>7-above</td>
            <td>500</td>
        </tr>
    </table>
    <h3 align="center" style="margin-top:20px;"> As per your courier's weight pay the amount on:</h3>
    <div style="margin: 20px auto;; font-weight: bold;     margin-left: 70px;">
        <ol>
            <li>Fawry: 1234567890</li>
            <li>Vodafone Cash: 9876543210</li>
            <li>Bank Transfer: Account Number XXXX</li>
            <li>PayPal: example@example.com</li>
        </ol>
    </div>
</body>
</html>
