<?php
  require"header.php";
?>
  <main>
  	<div>
  		<section>
  			<h1>Signup</h1>
  			<?php
               if(isset($_GET['error']))
               {
               	if($_GET['error']=='emptyfileds')
               	{
               		echo "fill all the field";
               	}
               }
  			?>
  			<form action="includes/signup.inc.php" method="post">
  				<input type="text" name="uid" placeholder="username">
  				<input type="text" name="mail" placeholder="email">
  				<input type="password" name="pwd" placeholder="password">
  				<input type="password" name="pwd-repeat" placeholder="Repeat password">
  				<button type="submit" name="signup-submit">Signup</button>
  			</form>
  		</section>
  	</div>
  </main>

 <?php
  require "footer.php"
 ?>