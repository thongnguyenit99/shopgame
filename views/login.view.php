<div class="container">
<div class="frmlogin col-md-6  justify-content-between mt-5 mb-5">
    <!-- <div class="alert alert-danger mt-3 fade show" style="width:100%;text-align:center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> -->
    <h2 style="text-align: center;">Đăng Nhập</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="name">Tài khoản:</label>
            <input type="text" class="form-control" id="name" placeholder=" Username" name="f_Username">
        </div>
        <div class="form-group">
            <label for="pwd">Mật khẩu:</label>
            <input type="password" class="form-control" id="pwd" placeholder=" password" name="f_Password">
            <input type="hidden" class="form-control" name="f_Permission" value='0'>
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember password
            </label>
        </div>
        <button type="submit" class="col-12 btn btn-primary justify-content-betweenv mb-4">SIGN IN</button>
    </form>
</div></div>