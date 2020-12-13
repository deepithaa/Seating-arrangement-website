<?php
$name = $_POST['name'];
$regno = $_POST['regno'];
$dept = $_POST['dept'];
$year = $_POST['year'];
$sem = $_POST['sem'];
$block = $_POST['block'];
$floor=$_POST['floor'];
 $roomno=$_POST['roomno'];
 $benchno=$_POST['benchno'];
 $seating=$_POST['seating'];
if (!empty($name) || !empty($regno) || !empty($sem) || !empty($roomno) || !empty($block) || !empty($benchno)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "user-registration";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT name From arrangement Where name = ? Limit 1";
     $INSERT = "INSERT Into arrangement (name,regno,dept,year,sem,block,floor,roomno,benchno,seating) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $stmt->bind_result($username);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sisiisiiis",$name,$regno,$dept,$year,$sem,$block,$floor,$roomno,$benchno,$seating );
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>