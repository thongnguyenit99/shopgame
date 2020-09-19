<script>
    function validate() {
        const nameGame = $('#nameInsert').val();
        const contentGame = $('#contentInsert').val();
        const numPrice=$('#numprice').val();
        const manufacture=$('#manufacture').val();
        const img = $('#g_img').val();
        const qty=$('#quantity').val();
        if (nameGame == "" && contentGame == "" && numPrice=="" && manufacture=="" && img=="") {
            alert("Nội không được rỗng!!Mời bạn nhập lại!");
            return false;
        }
        else if (nameGame == "") {
            alert("Tên game không được rỗng!!Mời bạn nhập lại!");
            nameGame.focus();
            return false;
        }
        else if (contentGame == "") {
            alert("Nội dung game không được rỗng!!Mời bạn nhập lại!");
           contentGame .focus();
            return false;
        }
        else if (numPrice) {
            if (numPrice == "") {
            alert("Giá tiền không được rỗng!!Mời bạn nhập lại!");
           numPrice .focus();
            return false;
            }
            else if(numPrice <=0){
            alert("Giá tiền không được nhỏ hơn hoặc bằng 0!!Mời bạn nhập lại!");
            numPrice.focus();
            return false;
            }
        }
         else if (qty) {
            if (qty == "") {
            alert("Số lượng không được rỗng!!Mời bạn nhập lại!");
           qty .focus();
            return false;
            }
            else if(qty <=0){
            alert("Số lượng không được nhỏ hơn hoặc bằng 0!!Mời bạn nhập lại!");
            qty.focus();
            return false;
            }
        }
        else if (manufacture == "") {
            alert("Hãng game không được rỗng!!Mời bạn nhập lại!");
            manufacture.focus();
            return false;
        }
         else if (img == "") {
            alert("Hình  game không được rỗng!!Mời bạn nhập lại!");
            img.focus();
            return false;
        }
    }
    function ValidateFileUpload() {
        var fuData = document.getElementById('g_img');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Hình ảnh không được rỗng");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

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
                alert("Hình ảnh chỉ bao gồm các loại GIF, PNG, JPG, JPEG and BMP. Mời bạn nhập đúng định dạng");

            }
        }
    }
</script>
<?php
require_once'../models/DBConnect.php';

if (isset($_POST['insertGame']) ) {
     try {

        // connect to mysql
        $pdoConnect = new PDO("mysql:host=localhost;dbname=shopgame","root","");
        // set font utf8
	    $pdoConnect->exec('set names utf8 ');
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }
    // get values form input text and number
      $nameGame=$_POST['txtname'];
      $content=$_POST['txtContent'];
      $numPrice=$_POST['numPrice'];
      $qty=$_POST['numQuantity'];
      $manufacture=$_POST['txtManufacture'];
      $img=$_FILES['fileGame']['name'];

    // mysql query to insert data

    $pdoQuery = "INSERT INTO products (name,detail,price,image,Manufacturer,quantity) VALUES (:txtname,:txtContent,:numPrice,:fileGame,:txtManufacture,:numQuantity)";

    $pdoResult = $pdoConnect->prepare($pdoQuery);

    $pdoExec = $pdoResult->execute(array(
    ":txtname"=>$nameGame,
    ":txtContent"=>$content,
    ":numPrice"=>$numPrice,
    ":fileGame" => $img,
    "txtManufacture"=>$manufacture,
    ":numQuantity"=>$qty
  ));
        // check if mysql insert query successful
    if($pdoExec)
    {
        echo 'Data Inserted';
    }else{
        echo 'Data Not Inserted';
    }
    var_dump($pdoExec) ;
}


?>

<div class="container col-md-5 mt-5">
    <h5 style="text-align:center;color:blue">Thêm sản phẩm từ form</h5>
<form method="POST" action="" id="frmAddGame" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nameInsert">Tên game <span class="error-add">*</span></label>
    <input type="text" class="form-control" name="txtname" id="nameInsert" >
  </div>
  <div class="form-group">
    <label for="contentInsert">Nội dung <span class="error-add">*</span></label>
    <textarea  type="password" class="form-control" name="txtContent" id="contentInsert"></textarea>
  </div>
   <div class="form-group">
    <label for="price">Giá tiền <span class="error-add">*</span></label>
    <input type="number" class="form-control" name="numPrice" id="numprice">
  </div>
   <div class="form-group">
    <label for="manufacture">Hãng sản xuất <span class="error-add">*</span></label>
    <input type="text" class="form-control" name="txtManufacture" id="manufacture">
  </div>
   <div class="form-group">
    <label for="quantity">Số lượng <span class="error-add">*</span></label>
    <input type="number" class="form-control" name="numQuantity" id="quantity">
  </div><p>Tải hình ảnh <span class="error-add">*</span></p>
  <div class="input-group mb-5">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file ">
    <input type="file" class="custom-file-input" name="fileGame" id="g_img"
      aria-describedby="inputGroupFileAddon01" onchange="return ValidateFileUpload()" value="<?=$img?>">
    <label class="custom-file-label" for="g_img">Chọn File</label>
  </div>
</div>
  <button type="submit" id="insertGames" name="insertGame" class="btn btn-success ml-5 mb-5" onclick="return validate()">  <i class="fa fa-check" aria-hidden="true"></i> Thêm sản phẩm</button>
  <button type="button"  class="btn btn-danger mb-5 " onclick="location.href='index.php'" title="Trở về trang chủ Admin"><i class="fa fa-backward" aria-hidden="true"></i> Trở về</button>
</form>
</div>