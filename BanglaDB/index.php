<?php
include'db.php';
$sql = $db->query("SELECT post FROM `show`");
if($sql->num_rows>0){
	while($post = $sql->fetch_assoc()){
		echo '<p>' . $post['post'] . '</p>';
	}
}

?>
<a href="insert.php">add data</a>
