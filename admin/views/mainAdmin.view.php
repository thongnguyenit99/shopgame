<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $title ?></title>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="public/css/style.css" >

</head>
<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="addProduct.php"><i class="fa fa-plus" aria-hidden="true"></i>Thêm sản phẩm bằng form</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addgame.php"><i class="fa fa-plus" style="color:tomato"></i> Thêm sản phẩm từ CSV</a>
      </li>
      <li class="nav-item dropdown mgs-admin ">
      <a class="nav-link dropdown-toggle"  id="navbardrop" data-toggle="dropdown">
      
        <?php  if($_SESSION["f_Username"])  {
          echo 'Xin chào, '.$_SESSION['f_Username']; 
        }
        else  
 {  
      header("location:http://localhost:8000/shopgame/logout.php");  
 }  ?>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="http://localhost:8000/shopgame/index.php">Trở về trang chủ</a>
        <a class="dropdown-item" href="http://localhost:8000/shopgame/logout.php">Đăng xuất</a>
      </div>
    </li>
    </ul>
  </nav>
 <?php
        require_once "$view.view.php"; ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
