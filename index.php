<?php
  require"header.php";
?>
  <main>
  	<div>
  		<section>
  			<?php
          if(isset($_SESSION['userid'])){
            echo "you are logged in";
          }
          else{
            echo "you are logged out";
          }
        ?>
  		</section>
  	</div>
  </main>

 <?php
  require "footer.php"
 ?>