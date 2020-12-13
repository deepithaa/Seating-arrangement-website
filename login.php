<!doctype html>  
<html>  
<head>  
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Login</title>  
    <style>  
body {
	background-image: url("https://img.freepik.com/free-photo/chalkboard-blackboard-dark-wallpaper-background_28629-1125.jpg?size=626&ext=jpg");
        background-repeat:no-repeat;
        background-position:center;
        padding:90px;
        background-size:1540px 850px;

} 
	
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color:cyan;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h1 {  
  margin-top:10px;	
  text-align: center;
  color:#87cefa;
  font-weight: normal;
 
}  
       h2{
text-align: center;
  color: yellow;
  font-weight: strong;
 
  }
        h3 {  
    color: coral;  
    font-family: verdana;  
	font-weight:bold
    font-size: 100%;  
} </style>  
</head>  
<body>  
      <div class="w3-container w3-center">
  <h1 style= class="w3-animate-opacity">R.M.K Engineering College</h1>
  <h2 style= class="w3-animate-top" class="w3-xlarge w3-serif">SEATING ARRANGEMENT</h2>
</div>
   <p style="color:white"><center><a href="reg.php">Register</a> | <a href="login.php">Login</a></center></p>
<h3><center>Login Form</center></h3>  
<form action="" method="POST">  
<center>Username: <input type="text" name="user"></center><br />  
<center>Password: <input type="password" name="pass"></center><br />   
<center><input type="submit" value="Login" name="submit" /> </center> 
</form>  
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'user-registration') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: form.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>   