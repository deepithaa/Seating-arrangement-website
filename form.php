<!DOCTYPE HTML>
<html>
<head>
</head>
<style>
body
{
background-color:black;
color:white;
}
</style>
<body>
 <form action="insert.php" method="POST">
<center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <table>
   <tr>
    <td>NAME:</td>
    <td><input type="text" name="name" required></td>
<br>
   </tr>
   <tr>
    <td>REGISTER NUMBER :</td>
    <td><input type="number" name="regno" required></td>
<br>
   </tr>
   <tr>
    <td>DEPARTMENT:</td>
    <td>
     <select name="dept" required>
      <option selected hidden value="">---Select dept---</option>
      <option value="CSE">CSE</option>
      <option value="IT">IT</option>
      <option value="EEE">EEE</option>
      <option value="ECE">ECE</option>
      <option value="CIVIL">CIVIL</option>
      <option value="E AND I">E AND I</option>
     </select>
    </td>
   </tr>
   <tr>
    <td>YEAR:</td>
	<td>
     <select name="year" required>
      <option selected hidden value="">---Select year---</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
     </select>
    <td>
   </tr> 
   <tr>
     <td>SEMESTER:</td>
	<td>
     <select name="sem" required>
      <option selected hidden value="">---Select sem---</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
	  <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
     </select>
    </td>
   </tr>
   <tr>
<td>BLOCK NAME:<td>
<input type="text" name="block" required>
</tr>
 <tr>
     <td>FLOOR:</td>
	<td>
     <select name="floor" required>
      <option selected hidden value="">---Select floor---</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
   </select>
    </td>
   </tr>
   <tr>
   <td>ROOM NUMBER:</td>
   <td><input type="number or text" name="roomno" required></td>
   </tr>
   <tr>
   <td>BENCH NUMBER:</td>
   <td><input type="number" name="benchno" required></td>
   </tr>
   <tr>
   <td>SEATING:</td>
	<td>
     <select name="seating" required>
      <option selected hidden value="">---Select place---</option>
      <option value="left">left</option>
      <option value="center">center</option>
      <option value="right">right</option>
   </select>
    </td>
   <tr>
    <td><input type="submit" value="Submit"></td>
   </tr>
  </table>
</center>
 </form>
</body>
</html>