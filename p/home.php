<?php
session_start();
 include("connect.php");
 include("functions.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>pharmacy management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body 
    {
      background-image: url('first_page_bg.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;  
      background-size: cover;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Pharmacy Management</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="page1.php">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
            
        </li>
          </ul>
        </div>
      </nav>
<div class="jumbotron text-center">
  <h1><b><i>Pharmacy Management</i></b></h1>
  <p>One stop solution for all your medical needs!</p> 
</div>
</body>
</html>