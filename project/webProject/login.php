<?php
	require 'connection.php';
	$name = $_POST["username"];
	$pass = md5($_POST["password"]);
	$escaped_name = mysqli_real_escape_string($conn, $name);
	$sql = "Select * from registertion where email = '$escaped_name' AND pass = '$pass'";
  $result = $conn->query($sql);
	if($result->num_rows ==1){
      
    // print_r($result);
  	  open_new_session($name);
      // echo $result->num_rows;

      header("Location:account.php");
  }
  else{
    header("Location:index.php");
    // echo $result->num_rows;
  	
  }
function open_new_session($name){
  session_start();
  $_SESSION["name"] = $name;
  $_SESSION["time"] = time();
}  
?>