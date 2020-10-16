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
  
$result = mysqli_query($con,"SELECT * FROM ostotapahtumat"); 
echo "<table border='1'> 
<tr> 
<th>buyers username</th> 
<th>game bought</th> 
</tr>"; 
while($row = mysqli_fetch_array($result)) { 
echo "<tr>"; 
echo "<td>" . $row['Username'] . "</td>"; 
echo "<td>" . $row['Gname'] . "</td>"; 
echo "</tr>"; 
} 
echo "</table>"; 
  
mysqli_close($con);