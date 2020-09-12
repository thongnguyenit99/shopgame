    <div class="container">
        <div class="row">
            <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
                <?php if ($data['product']->promotion_price != 0) : ?>
                <div class="icon-sale-label sale-left">Sale</div>
                <?php endif ?>
                <div class="large-image">
                    <a href="public/images/products/<?= $data['product']->image ?>" class="cloud-zoom" id="zoom1"
                        rel="useWrapper: false, adjustY:0, adjustX:20">
                        <img class="zoom-img" src="public/images/products/<?= $data['product']->image ?>"
                            alt="<?= $data['product']->name ?>" style="width:800px" heigh="600px"
                            title="<?= $data['product']->name ?>">
                    </a>
                </div>
            </div>
            <div class=" col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">

                <div class="product-name">
                    <h1> Tên sản phẩm: <?= $data['product']->name ?></h1>
                </div>
                <div class="price-box">
                    <span class="price-detail">Giá: </span>
                    <?php if ($data['product']->promotion_price != 0) : ?>
                    <p class="special-price">
                        <span class="price"><?= number_format($data['product']->promotion_price) ?> vnđ
                        </span>
                    </p>
                    <p class="old-price">
                        <span class="price"><?= number_format($data['product']->price) ?> vnđ </span>
                    </p>
                    <?php else : ?>
                    <p class="special-price">
                        <span class="price"><?= number_format($data['product']->price) ?> vnđ </span>
                    </p>
                    <?php endif ?>
                </div>
                <hr>
                <div class="describe mt-3">
                    <h2>Chi Tiết</h2>
                    <div><?= $data['product']->detail ?></div>
                    <div><strong>Hãng sản xuất: </strong> <?= $data['product']->Manufacturer ?></div>
                </div>

                <div class="product-variation mt-4">
                    <form action="#" method="post">
                        <div class="cart-plus-minus">
                            <label for="qty">Số lượng:</label>
                            <div class="numbers-row">
                                <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) && qty>1) result.value--;return false;"
                                    class="dec qtybutton">
                                    <i class="fa fa-minus">&nbsp;</i>
                                </div>
                                <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                    class="inc qtybutton">
                                    <i class="fa fa-plus">&nbsp;</i>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-success ml-2" title="Thêm sản phẩm" type="button"
                            data-id="<?= $data['product']->id ?>">

                            <i class="fa fa-shopping-cart"></i> Thêm sản phẩm
                        </button>
                        <button class="btn btn-outline-danger ml-3" title="Trở về danh sách sản phẩm"
                            onclick="location.href='index.php'" type="button">
                            Trở về</button>
                    </form>
                </div>

            </div>
        </div>
    </div>