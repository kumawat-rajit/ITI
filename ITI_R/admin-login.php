<?php
session_start();
 include_once "header.php";

 ?>
<div style="margin-bottom: 35px;"></div>

<main>
	<div class="login">
 
  <?php
                if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<div class='alert alert-warning'>$error</div>";
                    }
                ?>  

   <form action="admin.php" method="POST">
  <div class="form-group">
    <label for="username">User Name:</label>
    <input type="username" class="form-control" placeholder="Enter User Name" name="username" id="username" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password" id="pwd" required>
  </div>
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>  
  </div>
</main>
<?php 
unset($_SESSION["error"]);
  include_once('footer.php') ?>
