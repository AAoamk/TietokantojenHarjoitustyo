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
  
 $gamename= filter_input(INPUT_POST,'GN',FILTER_SANITIZE_STRING); 
 $genrename= filter_input(INPUT_POST,'GEN',FILTER_SANITIZE_STRING); 
 $agenumber= filter_input(INPUT_POST,'AGE',FILTER_SANITIZE_STRING); 
 $sql="INSERT INTO Games (Gname, Genre, agerating) " 
  . "VALUES ('$gamename','$genrename','$agenumber')"; 

 if (!mysqli_query($con, $sql)){ 
  die('Error: ' . mysqli_error($con)); 
 } 

 echo "1 record added"; 
 mysqli_close($con); 
  
