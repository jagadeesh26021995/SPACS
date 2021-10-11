<?php
Include("../config.php");
Include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Marketer panel</title>
</head>
<body>
<div class="topnav">
<a href="logout.php"><i class="fa fa-power-off"></i> LOGOUT</a>
    <a href="profile.php"><i class="fa fa-male"></i> PROFILE</a>
    <a href="Marketer_home.php"><i class="glyphicon glyphicon-home"></i></a>
<a href="">MARKETER PANEL</a>


    </div>
    <div class="sidenav">
        <br><br>
        <a href=""><i class="fa fa-fw fa-user"></i>Home</a><hr>
        <a href="marketer_objective.php"><i class="fa fa-edit"></i>Objectives</a><hr>
        <a href="marketer_customer.php"><i class=" 	fa fa-handshake-o"></i>Customer Details</a><hr>
        <a href="marketer_finalstatement.php"><i class="fa fa-folder-open"></i>Final Statement</a><hr>
        
</div>
</body>
</html>


   
