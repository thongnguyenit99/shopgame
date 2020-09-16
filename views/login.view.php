<?php
if (isset($_POST['login'])) {
	$errMsg = ''; // khai báo biên báo lỗi

	// Get data from FORM
	$username = $_POST['f_Username'];
	$password = $_POST['f_Password'];
	// nếu username rỗng thì sẽ báo lỗi là phải nhập username vào,, nếu mật khẩu cũng như trên,, phải nhập mật khẩu nữa thì ms thực thi
	if ($username == '')
		$errMsg = 'Mời bạn nhập tài khoản';
	if ($password == '')
		$errMsg = 'Mời bạn nhập mật khẩu';
	if ($password == '' && $username == '')
		$errMsg = 'Mời bạn nhập tài khoản và mật khẩu ^-^';
    if ($errMsg == ''){
        try{
           // require_once'models/DBConnect.php';
             // connect to mysql
        //$pdoConnect = new PDO("mysql:host=localhost;dbname=shopgame","root","");
        // set font utf8
      //  $pdoConnect->exec('set names utf8 ');
        //    $conn=new ProductModel();
          //  $conn->checkUser();
            if($username=="admin" && $password=="admin"){
                $_SESSION['f_Username'] = 'admin';
					$_SESSION['f_Password'] = 'admin';
               echo '<script type="text/javascript">window.location = "admin/index.php" </script>';
            }
            else{
                echo '<script type="text/javascript">window.location = "login.php" </script>';
            }
        }
        catch (PDOException $e) {
			$errMsg = $e->getMessage();
		}
    }
}
?>

<div class="container">
<div class="frmlogin col-md-6  justify-content-between mt-5 mb-5">
    <div class="mt-3 fade show" style="width:100%;text-align:center" role="alert">
          <?php // thông báo lỗi trên đây
				if (isset($errMsg)) {
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">' . $errMsg . '</div>';
				}
				?>
    </div>
    <h2 style="text-align: center;">Đăng Nhập</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="name">Tài khoản <span class="error">*</span></label>
            <input type="text" class="form-control" id="name" value="<?php if (isset($_POST['f_Username'])) echo $_POST['f_Username'] ?>"
            placeholder=" Username" name="f_Username">
        </div>
        <div class="form-group">
            <label for="pwd">Mật khẩu <span class="error">*</span></label>
            <input type="password" class="form-control" id="pwd" name="f_Password"
            value="<?php if (isset($_POST['f_Password'])) echo $_POST['f_Password'] ?>" placeholder=" password" name="f_Password">
            <input type="hidden" class="form-control" name="f_Permission" value='0'>
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember password
            </label>
        </div>
        <button type="submit" name="login" class="col-12 btn btn-primary justify-content-between mb-4">SIGN IN</button>
    </form>
</div>
</div>