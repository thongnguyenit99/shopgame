 <?php
 //logout.php
  echo '<script type="text/javascript">window.location = "login.php" </script>';
  unset($_SESSION['f_Username']);
  //session_destroy();

 ?>