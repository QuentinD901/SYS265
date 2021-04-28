<?php
//Set the vars used for your DB connection, using new acct creds
//Also, bet you can't guess what my new Mariadb account & password are? :)
  $username="cyber";
  $password="dog";
  $database="pets";

//Acquire the Cat's name from your html POST
  $name=$_POST['name'];

//Establish MySQL connection called $mysqli
  $mysqli=new mysqli('localhost',$username,$password,$database);


//Define your query - pay close attention to ' and "!
  $query="SELECT * from cats where name='".$name."'";

//Run query - result is reurned as a resource id
//If query has error, _LINE_ will print the error from mysql
  $result=$mysqli->query($query) or die($mysqli->error.__LINE__);


//Resource id results must be iterpreted
//This while loop will run thru the results row by row & echo name & birth fields
if ($result->num_rows > 0) {
  while($row=$result->fetch_assoc()) {
  echo $row['name']."'s birthday is ".$row['birth']."</br>";
  }
  }
  else {
  echo 'NO RESULTS';
  }
?>
