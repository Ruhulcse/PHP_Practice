<?php
$db = new Mysqli('localhost', 'root', '', 'example');
if($db->connect_error) {
   die('Connection errror');
}
$db->set_charset('utf8mb4'); 
