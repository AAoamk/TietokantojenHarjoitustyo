<?php 
  
$host='localhost'; 
$dbname='mydb_t9alal00'; 
$username='t9alal00'; 
$password=''; 
  
$con=mysqli_connect($host,$username,$password,$dbname); 
  
if (mysqli_connect_errno()) 
{ 
  echo "Yhteys ep onnistui" . mysqli_connect_error(); 
} 
  
$result = mysqli_query($con,"SELECT * FROM Users"); 
echo "<table border='1'> 
<tr> 
<th>User ID</th> 
<th>First name</th> 
<th>Last name</th> 
<th>Username</th>
<th>Password</th>
</tr>"; 
while($row = mysqli_fetch_array($result)) { 
echo "<tr>"; 
echo "<td>" . $row['Userid'] . "</td>"; 
echo "<td>" . $row['FirstName'] . "</td>"; 
echo "<td>" . $row['LastName'] . "</td>";
echo "<td>" . $row['Username'] . "</td>";
echo "<td>" . $row['Password'] . "</td>"; 
echo "</tr>"; 
} 
echo "</table>"; 
  
mysqli_close($con);