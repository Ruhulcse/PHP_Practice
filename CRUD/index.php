<?php 
  include 'inc/header.php';
  include 'config.php';
  include 'database.php';
 ?>

<?php
  $db=new database();
  $query="SELECT *FROM tbl_user";
  $read=$db->select($query);
?>	

<?php
  if(isset($_GET['msg'])){
  	echo $_GET['msg'];
  }
?>

<table class="tblone">
	<tr>
		<th width="10%">Serial</th>
	    <th width="25%">Name</th>
		<th width="25%">Email</th>
		<th width="25%">Skill</th>
		<th width="15%">Action</th>
	</tr>


 <?php if($read){?>
 <?php
  $i=1;
  while($row = $read->fetch_assoc()){
 ?>
  <tr>
  	<td><?php echo $i++?></td>
  	<td><?php echo $row['name']; ?></td>
  	<td><?php echo $row['email']; ?></td>
  	<td><?php echo $row['skill']; ?></td>
  	<td><a href="update.php?id=<?php echo urldecode($row['id']);?>">Update</a></td>
  </tr>
 <?php } ?>
 <?php } else {?>
 	<p>Data is not available !!</p>
 <?php } ?>
</table>

<a href="create.php">Create</a>

<?php include 'inc/footer.php';?>
