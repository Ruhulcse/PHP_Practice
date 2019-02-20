<?php
  $server="localhost";
  $username="root";
  $password="";
  $database="mycity";
  $mysqli=new mysqli($server,$username,$password,$database);
  if($mysqli->connect_errno)
  {
  	echo "Connection faild";
  	exit();
  }
  else
  {
  	echo "connect successfully";
  }

?>