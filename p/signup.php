<?php
session_start();
include("connect.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $user = $_POST['user_name'];
    $pass  = $_POST['password'];
    $repass = $_POST['repassword'];
    if(!empty($user) && !empty($pass) && !empty($repass) && !is_numeric($user))
    {
        $query="insert into sign_up (user_name,password,repassword) values ('$user','$pass','$repass')";
        mysqli_query($con,$query);
        header("Location: login.php");
        die;
    }
    else
    {
        echo "please enter a valid information";
    }
}
?>
<!DOCTYPE html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="ram08.css">
    <style>
        body {
          background-image: url('Signup_bg.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;  
          background-size: cover;
        }
        </style>
</head>

<body>
<form method="post">
        <h1>Signup</h1>
    <div class="textbox">
            <input type ="text" placeholder="enter user name" name="user_name">
        </div>
        <div class="textbox">
            <input type="password" placeholder="enter pass" name="password">
        </div>
        <div class="textbox">
            <input type="password" placeholder="re enter pass" name="repassword">
        </div>
        <div>
            <button>
             Submit
            </button>
        </div>
            

        </div>

    </form>
</body>

