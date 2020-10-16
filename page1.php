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
  
 $firstname= filter_input(INPUT_POST,'FN',FILTER_SANITIZE_STRING); 
 $lastname= filter_input(INPUT_POST,'LN',FILTER_SANITIZE_STRING); 
 $username= filter_input(INPUT_POST,'UN',FILTER_SANITIZE_STRING); 
 $password= filter_input(INPUT_POST,'PW',FILTER_SANITIZE_STRING); 

 $sql="INSERT INTO Users (FirstName, LastName, Username, Password) " 
  . "VALUES ('$firstname','$lastname','$username','$password')"; 

 if (!mysqli_query($con, $sql)){ 
  die('Error: ' . mysqli_error($con)); 
 } 

 echo "1 record added"; 
 mysqli_close($con); 
  
