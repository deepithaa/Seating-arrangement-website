<!doctype html>  
 
<html>  
<head>  
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>output</title>  
    <style>  
body {
	background-image: url("http://www.latestseotutorial.com/wp-content/uploads/2016/11/good-luck-Wallpapers.jpg");
        background-repeat:no-repeat;
       background-position:bottom;
        padding:300px;
        background-size:1490px 850px;
        font-family:font-family: arial, helvetica;
        
color:black;

        
}
</style>
</head>
<?php
           $regno = $_POST['reg'];
		   if (!empty($regno)){
			    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "user-registration";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	}
	$sql = "SELECT * FROM arrangement WHERE regno='$regno'";
    if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>NAME</th>";
                echo "<th>REGISTER NUMBER</th>";
                echo "<th>DEPARTMENT</th>";
                echo "<th>YEAR</th>";
				echo "<th>SEMESTER</th>";
				echo "<th>BLOCK NAME</th>";
				echo "<th>FLOOR</th>";
				echo "<th>ROOM NUMBER</th>";
				echo "<th>BENCH NUMBER</th>";
				echo "<th>SEATING</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['regno'] . "</td>";
                echo "<td>" . $row['dept'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
				 echo "<td>" . $row['sem'] . "</td>";
				  echo "<td>" . $row['block'] . "</td>";
				   echo "<td>" . $row['floor'] . "</td>";
				    echo "<td>" . $row['roomno'] . "</td>";
					 echo "<td>" . $row['benchno'] . "</td>";
					  echo "<td>" . $row['seating'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 mysqli_close($conn);
		   }
?>
</html>
