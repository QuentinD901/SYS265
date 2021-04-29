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
  
  $stmt=$mysqli->prepare("SELECT birth from cats where name=?");
  $stmt->bind_param('s',$variable that you set from the $_POST);
  $stmt->execute();
  $stmt->bind_result($birth);   //This creates the variable with the birthday result
  $stmt->store_result();  //After the bind_result so the script knows how many rows are returned.
  if ($stmt->num_rows >0) {
  while ($stmt->fetch()) {
  echo $name."'s birthday is ".$birth;
  else {
  echo 'No Results';
  }
?>
// FOR NON SEC
//Resource id results must be iterpreted
//This while loop will run thru the results row by row & echo name & birth fields
//if ($result->num_rows > 0) {
  //while($row=$result->fetch_assoc()) {
  //echo $row['name']."'s birthday is ".$row['birth']."</br>";
 // }
 // }
  //else {
  //echo 'NO RESULTS';
  //}
