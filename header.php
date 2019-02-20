<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>login system</title>
</head>
<body>
    <header>
    	<nav>
    		<ul>
    			<li><a href="index.php">home</a></li>
    			<li><a href="#">portfilo</a></li>
    			<li><a href="#">about me</a></li>
    			<li><a href="#">Contact</a></li>
    		</ul>
    		<div>
    			<?php
			        if(isset($_SESSION['userid'])){
			            echo '<form action="includes/logout.inc.php" method="post">
    				<button type="submit" name="logout-submit">Logout</button>
    			</form>';
			          }
			         else{
			            echo'<form action="includes/login.inc.php" method="post">
    				<input type="text" name="mailud" placeholder="username/email">
    				<input type="password" name="pwd" placeholder="password">
    				<button type="submit" name="login-submit">Login</button>
    			</form>
    			<a href="signup.php">Signup</a>';
			          }
    			?>
    		</div>
    	</nav>
    </header>
</body>
</html>