<!doctype html>  
<html>  
<head>  
<title>Register</title>  
    <style>   
        body{ 
     background-image: url("http://backgroundcheckall.com/wp-content/uploads/2017/12/registration-form-background-images-1.jpg");
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: black ;  
    color: azure;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
         h2 {  
    color:darkred;  
    font-family: verdana;  
    font-size: 100%;  
}</style>  
</head>  
<body>  
  <br>
<br> 
<br>
<br> 
<br>
<br>   
 
   
    <center><h2>REGISTRATION FORM</h2></center>
  
<form action="" method="POST">  
   
          
<center>Username: <input type="text" name="user"></center><br />  
<center>Password: <input type="password" name="pass"></center><br />   
<center><input type="submit" value="Register" name="submit" /> </center> 
              
       
</form>  
<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'user-registration') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";  
  
    $result=mysqli_query($con,$sql);  
        if($result){  
    echo "Account Successfully Created";  
    } else {  
    echo "Failure!";  
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>   