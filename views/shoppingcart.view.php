<section class="main-container col1-layout">
    <div class="main container">
        <div class="col-main">
            <div class="cart">

                <div class="page-content page-order">
                    <div class="page-title">
                        <h2>Giỏ hàng của bạn</h2>
                    </div>


                    <div class="order-detail-content">
                        <?php if ($data['cart']->totalQty == 0) : ?>
                        <p class="text-center">Giỏ hàng rỗng, vui lòng mua hàng</p>
                        <div class="cart_navigation" style=" text-align: center;"> <a class="continue-btn" href=""><i
                                    class="fa fa-arrow-left">
                                </i>&nbsp; Tiếp tục mua sắm</a>

                            <?php else :  ?>
                            <div class="table-responsive">
                                <table class="table table-bordered cart_summary">
                                    <thead>
                                        <tr>
                                            <th class="cart_product">Hình ảnh </th>
                                            <th>Tên sản phẩm</th>
                                            <th>Đơn giá/ giá khuyến mãi</th>
                                            <th>Số lượng</th>
                                            <th>Tổng số tiền</th>
                                            <th class="action"><i class="fa fa-trash-o"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($data['cart']->items as $idProduct => $product) : ?>

                                        <tr class="product-info-<?= $idProduct ?>">
                                            <td class="cart_product"><a href="#"><img
                                                        src="public/images/products/<?= $product['item']->image ?>"
                                                        alt="Product"></a></td>
                                            <td class="cart_description">
                                                <p class="product-name"><a
                                                        href="<?= $product['item']->url ?>-<?= $product['item']->id ?>">
                                                        <?= $product['item']->name ?>
                                                    </a></p>
                                            <td class="price"><span>
                                                    <?php
                                                            if ($product['item']->price == $product['item']->promotion_price)
                                                                echo number_format($product['item']->price);
                                                            else {
                                                                echo '<del style="color:#000" >' . number_format($product['item']->price) . '</del>';
                                                                echo '<br>';
                                                                echo number_format($product['item']->promotion_price);
                                                            }
                                                            ?>
                                                </span></td>
                                            <td class="qty">
                                                <input style="width: 60%;float: left"
                                                    class="form-control input-sm txtQty-<?= $idProduct ?> " type="text"
                                                    value="<?= $product['qty'] ?>">
                                                <i title="Edit" style="width: 40%;float: left;line-height: 30px"
                                                    class="fa fa-edit edit-cart" data-id="<?= $idProduct ?>"></i>
                                            </td>
                                            <td class=" price"> <span class="promotionPrice-<?= $idProduct ?>">
                                                    <?= number_format($product['promotionPrice']) ?>
                                                </span></td>
                                            <td class="action">
                                                <a data-id="<?= $idProduct ?>">
                                                    <i class="icon-close"></i></a></td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" rowspan="3"></td>
                                            <td colspan="3">Tổng tiền</td>
                                            <td colspan="2" class="totalPrice">
                                                <?= number_format($data['cart']->totalPrice) ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Giảm giá</td>
                                            <td colspan="2" class="selloff">
                                                <?= number_format($data['cart']->promtPrice - $data['cart']->totalPrice) ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><strong>Tiền thực phải trả</strong></td>
                                            <td colspan="2" class="promtPrice">
                                                <strong><?= number_format($data['cart']->promtPrice) ?></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="cart_navigation"> <a class="continue-btn" href="#"><i class="fa fa-arrow-left">
                                    </i>&nbsp; Tiếp tục mua sắm</a> <a class="checkout-btn" href="thanh-toan.html"><i
                                        class="fa fa-check"></i>
                                    Thanh toán sản phẩm</a> </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<script>
$('.action a').click(function() {
    var idProduct = $(this).attr('data-id')
    $.ajax({
        url: 'cart.php', // duong dan toi file do
        type: 'POST', // kieu post
        data: {
            id: idProduct,
            action: 'delete' // hanh dong xoa
        },
        dataType: 'JSON',
        success: function(res) {
            if (res.error == 1) alert(res.message) // thong bao loi
            else {
                // console.log(res)
                $('.totalPrice').text(res.data.totalPrice)
                $('.selloff').text(res.data.sellOff)
                $('.promtPrice').html("<b style='color:#ff6e1f'>" + res.data.promtPrice + "</b>")
                $('.product-info-' + idProduct).hide(800) // noi chuoi, thoi gian 800 giay
            }
        }
    })
})
$('.edit-cart').click(function() {
    //alert(123)
    var idProduct = $(this).attr('data-id')
    var qty = $('.txtQty-' + idProduct).val()
    $.ajax({
        url: 'cart.php',
        type: 'POST',
        data: {
            id: idProduct,
            qty: qty,
            action: 'update'
        },
        dataType: 'JSON',
        success: function(res) {
            if (res.error == 1) alert(res.message) // thong bao loi
            else {
                //console.log(res)
                $('.promotionPrice-' + idProduct).text(res.data.itemUpdate)
                $('.totalPrice').text(res.data.totalPrice)
                $('.selloff').text(res.data.sellOff)
                // tong tien thanh toan thuc te... .html thi co css
                $('.promtPrice').html("<b style='color:#ff6e1f'>" + res.data.promtPrice + "</b>")

            }
            //console.log(res)
        }
    })
})
</script>