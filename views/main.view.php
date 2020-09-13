<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="public/favicon.ico" rel="shortcut icon" type="image/x-icon " />
    <title>
        <?= $title ?>
    </title>
    <base href="http://localhost:8000/shopgame/">

</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Basic page needs -->
        <meta charset="utf-8">
        <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MyStore premium HTML5 &amp; CSS3 template</title>
        <meta name="description"
            content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
        <meta name="keywords"
            content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template" />
        <!-- Mobile specific metas  , -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon  -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- font-awesome & simple line icons CSS -->
        <link rel="stylesheet" type="text/css" href="public/css/font-awesome.css" media="all">
        <link rel="stylesheet" type="text/css" href="public/css/simple-line-icons.css" media="all">

        <!-- owl.carousel CSS -->
        <link rel="stylesheet" type="text/css" href="public/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="public/css/owl.theme.css">
        <link rel="stylesheet" type="text/css" href="public/css/owl.transitions.css">

        <!-- animate CSS  -->
        <link rel="stylesheet" type="text/css" href="public/css/animate.css" media="all">

        <!-- flexslider CSS -->
        <link rel="stylesheet" type="text/css" href="public/css/flexslider.css">

        <!-- jquery-ui.min CSS  -->
        <link rel="stylesheet" type="text/css" href="public/css/jquery-ui.css">

        <!-- Revolution Slider CSS -->
        <link href="public/css/revolution-slider.css" rel="stylesheet">

        <!-- style CSS -->
        <link rel="stylesheet" type="text/css" href="public/css/style.css" media="all">
        <link href="public/css/btn_top.css" rel="stylesheet">

        <!-- jquery js -->
        <script type="text/javascript" src="public/js/jquery.min.js"></script>
    </head>

    <body class="cms-index-index cms-home-page">
        <!-- Header -->
        <header>
            <div class="header-container">
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-7 col-sm-4 hidden-xs">
                                <!-- Default Welcome Message -->
                                <div class="row">
                                    <div class="welcome-msg col-sm-3 col-md-3 col-xs-12"><a href="tel:0345870xxx">0345.870.xxx
                                        </a>
                                    </div>
                                    <div class="phone col-sm-3 col-md-3 col-xs-12"><a
                                            href="mailto:thongnv@smartosc.com">thongnv@smartosc.com</a>
                                    </div>
                                </div>
                            </div>
                            



                            <!-- top links -->
                            <div class="headerlinkmenu col-lg-8 col-md-5 col-sm-8 col-xs-12">
                                <div class="links">
                                    <div class="myaccount">
                                        <a title="My Account" href="account.php">
                                            <i class="fa fa-user"></i>
                                            <span class="hidden-xs">My Account</span>
                                        </a>
                                    </div>

                                    <div class="login">
                                        <a href="login.php">
                                            <i class="fa fa-unlock-alt"></i>
                                            <span class="hidden-xs">Đăng Nhập</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-xs-12">
                            <!-- Header Logo -->
                            <div class="logo">
                                <a title="thông nguyễn" href="index.php">
                                    <img alt="responsive theme logo" style="width:250px;"
                                        src="public/images/pic/logo.png">
                                </a>
                            </div>
                            <!-- End Header Logo -->
                        </div>
                        <div class="col-xs-9 col-sm-6 col-md-6">
                            <!-- Search -->

                            <div class="top-search mt-5">
                                <div id="search">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="search">
                                            <button class="btn-search" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- End Search -->
                        </div>
                        <!-- top cart -->

                        <div class="col-lg-3 col-xs-3 top-cart mt-5">
                            <div class="top-cart-contain">
                                <div class="mini-cart">

                                    <a href="gio-hang.html">
                                        <div class=" cart-icon">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;

                                        </div>
                                        <div class="shoppingcart-inner hidden-xs">
                                            <span class="cart-title"> Giỏ hàng của bạn</span>
                                            <span class="cart-total">
                                                <span id="totalItemCart"><?= $totalItemCart ?>
                                            </span> 
                                                 Item(s)
                                            </span>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        <?php
        require_once "$view.view.php";
        ?>

        <!-- Footer -->

        <div class="text-center" id="footer">
        <p>@Thiết kế bởi Thông Nguyễn</p>
         <a id="on_top" class="on_top" href="#top" style="display: block;">
         <i class="fa-arrow-circle-up fa"></i></a>
        </div>
        
        <!-- End Footer -->

        <!--  o day thi  minh them modal bootstrap https://getbootstrap.com/docs/4.0/components/modal/ -->
        <div id="messageCart" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <h6 id="my_message"></h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- jquery js -->
        <script type="text/javascript" src="public/js/jquery.min.js"></script>

        <!-- bootstrap js -->
        <script type="text/javascript" src="public/js/bootstrap.min.js"></script>


        <!-- owl.carousel.min js -->
        <script type="text/javascript" src="public/js/owl.carousel.min.js"></script>

        <!-- bxslider js -->
        <script type="text/javascript" src="public/js/jquery.bxslider.js"></script>

        <!-- Slider Js -->
        <script type="text/javascript" src="public/js/revolution-slider.js"></script>

        <!-- megamenu js -->
        <script type="text/javascript" src="public/js/megamenu.js"></script>
        <script type="text/javascript">
        /* <![CDATA[ */
        var mega_menu = '0';

        /* ]]> */
        </script>

        <!-- jquery.mobile-menu js -->
        <script type="text/javascript" src="public/js/mobile-menu.js"></script>

        <!--jquery-ui.min js -->
        <script type="text/javascript" src="public/js/jquery-ui.js"></script>

        <!-- main js -->
        <script type="text/javascript" src="public/js/main.js"></script>
        <script type="text/javascript" src="public/js/btn_top.js"></script>


        <!-- countdown js -->
        <script type="text/javascript" src="public/js/countdown.js"></script>
        ​ <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
        </script>
        <script>
        $('.add-to-cart-mt').click(function() {
            var id = $(this).attr('data-id')
            var qty = 1;
            $.ajax({
                url: 'cart.php',
                type: 'POST',
                data: {
                    id: id,
                    qty: qty,
                    action: 'add'
                },
                dataType: 'json',
                success: function(response) {
                    // response: obj
                    console.log(response)
                    if (response.error == 0) {
                        var productName = '<b>' + response.data
                            .product_name + '</b>';
                        var image = response.data.images;
                        $('#my_message').html(image)
                        $('#my_message').html(productName +

                            ' đã thêm vào giỏ hàng. <p><a href="gio-hang.html">Xem giỏ hàng</a></p> <img  src="public/images/products/' +
                            image + '">'
                        )
                        var totalItemCart = $('#totalItemCart')
                            .text()
                        $('#totalItemCart').text(parseInt(
                            totalItemCart) + 1)

                    } else {
                        // $('#my_message').html(response.message)
                        $('#my_message').html('Vui lòng thử lại');
                    }
                    $('#messageCart').modal('show');

                },
                error: function(error) {
                    console.log(error)
                }
            })
        })
        </script>
        <script>
        $('.addCartDetail').click(function() {
            var id = $(this).attr('data-id')
            var qty = 1;
            $.ajax({
                url: 'cart.php',
                type: 'POST',
                data: {
                    id: id,
                    qty: qty,
                    action: 'add'
                },
                dataType: 'json',
                success: function(response) {
                    // response: obj
                    console.log(response)
                    if (response.error == 0) {
                        var productName = '<b>' + response.data
                            .product_name + '</b>';
                        var image = response.data.images;
                        $('#my_message').html(image)
                        $('#my_message').html(productName +

                            ' đã thêm vào giỏ hàng. <p><a href="gio-hang.html">Xem giỏ hàng</a></p> <img  src="public/images/products/' +
                            image + '">'
                        )
                        var totalItemCart = $('#totalItemCart')
                            .text()
                        $('#totalItemCart').text(parseInt(
                            totalItemCart) + 1)

                    } else {
                        // $('#my_message').html(response.message)
                        $('#my_message').html('Vui lòng thử lại');
                    }
                    $('#messageCart').modal('show');

                },
                error: function(error) {
                    console.log(error)
                }
            })
        })
        </script>


    </body>

    </html>
</body>

</html