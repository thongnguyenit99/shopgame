<script>
 function ValidateFileUpload() 
 {
        var fuData = document.getElementById('txtfile');
        var FileUploadPath = fuData.value;

       //To check if user upload any file
        if (FileUploadPath == '') {
            alert("File không được rỗng");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

      //The file uploaded is an image

        if (Extension == "csv") {

        // To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

    //The file upload is NOT an image
        else {
                alert("File thêm chỉ định dạng CSV. Mời bạn nhập đúng định dạng");

            }
        }
}
 function validate() {
        const filegame = $('#txtfile').val();
       if(filegame==""){
            alert("File không được rỗng!!Mời bạn nhập lại!");
            return false;
       }
}
<?php
require_once"controllers/AdminController.php";
$router=new AdminController();
$router->addProductByCSV();

?>
</script>
<div class="container">
<div id="response"
        class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>">
        <?php if(!empty($message)) { echo $message; } ?>
        </div>
<form class="md-form mt-5 ml-5" method="post" action="" enctype="multipart/form-data" >
<div class="container">
<h5 class="ml-5 mt-5 mb-5" style="color:blue">Thêm sản phẩm bằng file CSV</h5>

    <div class="input-group mb-5 ml-5" >
    <div class="input-group-prepend" >
        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
    </div>
    <div class="custom-file col-md-4 ">
        <input type="file" class="custom-file-input" name="txtFile" id="txtfile"
        onchange="return ValidateFileUpload()" multiple   accept=".csv">
        <label class="custom-file-label" for="txtfile" name="filename">Chọn File</label>
    </div>
    </div>
  <button type="submit" name="create" class="btn btn-success ml-5 mb-5" onchange="return ValidateFileUpload()"  onclick="validate();">  <i class="fa fa-check" aria-hidden="true"></i> Thêm sản phẩm</button>
  <button type="button"  class="btn btn-danger mb-5 " onclick="location.href='index.php'" title="Trở về trang chủ Admin"><i class="fa fa-backward" aria-hidden="true"></i> Trở về</button>
</div>
</form>
</div>
