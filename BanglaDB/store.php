<?php
require 'db.php';
$post=$_POST['post'];

 $sql="INSERT INTO `show` (post) VALUES('$post')";
 if($db->query($sql)) {
 	header("Location: index.php");
 }
else {
   echo $db->error;
}
