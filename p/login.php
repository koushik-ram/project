
<?php
session_start();
include("connect.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD']=='POST')
{
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    if(!empty($user_name) && !empty($password)  && !is_numeric($user_name))
    {
        $query="select * from sign_up where user_name='$user_name'limit 1";
       $result = mysqli_query($con,$query);
      if($result)
      {
          if($result && mysqli_num_rows($result) > 0)
          {
              $user_data= mysqli_fetch_assoc($result);
              if($user_data['password']!=$password)
              {
                echo "enter valid password or username";
              }
              if($user_data['password']===$password)
              {
                header("location:home.php");
                die;
              }
              
          }
      }
      
  }
  if(empty($user_name) && empty($password))
  {
      echo "enter information";
  }
 
  }
    
  
    
?>
<!DOCTYPE html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="ram08.css">
    <style>
        body {
          background-image: url('background.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;  
          background-size: cover;
        }
    </style>
</head>
<body>
    <form method="post">
        <h1>Login</h1>
    <div class="textbox">
            <input type ="text" placeholder ="enter user name"name="user_name">
        </div>
        <div class="textbox">
            <input type="password" placeholder ="enter password" name ="password">
        </div>
        <div>
            <button>
            <a>SUBMIT</a>
        </button>  
        </div>
        <div class="signup">
        
            Don't have account?
        
       <a href="signup.php">Sign up</a>
            </div> 
        </div>
    </form>
</body>

