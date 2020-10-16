<?php 
 $host='localhost'; 
 $dbname='mydb_t9alal00'; 
 $username='t9alal00'; 
 $password=''; 
  
 $con=mysqli_connect($host,$username,$password,$dbname); 
  
 if (mysqli_connect_errno()) 
 { 
  echo "Yhteys epÃ¤onnistui" . mysqli_connect_error(); 
 } 
  
 $games= filter_input(INPUT_POST,'gam',FILTER_SANITIZE_STRING); 
 $users= filter_input(INPUT_POST,'use',FILTER_SANITIZE_STRING); 
 $trans= filter_input(INPUT_POST,'tra',FILTER_SANITIZE_STRING);  

$sql="INSERT INTO Connector (idGames, idUsers, idTransactions) " 
  . "VALUES ('$games','$users','$trans')"; 

 if (!mysqli_query($con, $sql)){ 
  die('Error: ' . mysqli_error($con)); 
 } 

 echo "1 record added"; 
 mysqli_close($con); 
  
