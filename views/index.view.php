<div class="product-flexslider hidden-buttons container">
    <h2>Danh sách sản phẩm</h2>
    <div class="row mb-5 ">
        <?php foreach ($data['listProducts'] as $product) :?>
        <div class="col-sm-12 col-md-4 col-xs-12  ">
            <div class="product-item mt-3">
                <div class="item-inner">
                    <div class="product-thumbnail ">
                        <?php if ($product->promotion_price != 0) : ?>
                        <div class="icon-sale-label sale-left">Sale</div>
                        <?php endif ?>
                        <div class="pr-img-area">
                            <a title="<?= $product->name ?>" href="<?= $product->url ?>-<?= $product->id ?>.html">
                                <figure>
                                    <img height="300px" class="first-img"
                                        src="public/images/products/<?= $product->image ?>" alt="<?= $product->name ?>">
                                    <img height="300px" class="hover-img"
                                        src="public/images/products/<?= $product->image ?>" alt="<?= $product->name ?>">
                                </figure>
                            </a>
                            <button type="button" class="add-to-cart-mt" data-id="<?= $product->id ?>">
                                <i class="fa fa-shopping-cart"></i>
                                <span> Chọn Mua</span>
                            </button>
                        </div>
                    </div>
                    <div class="item-info">
                        <div class="info-inner">
                            <div class="item-title">
                                <a title="<?= $product->name ?>" href="<?= $product->url ?>-<?= $product->id ?>.html">
                                    <?= $product->name ?>
                                </a>
                            </div>
                            <div class="item-content">
                                <div class="item-price">
                                    <div class="price-box">
                                        <?php if ($product->promotion_price == 0) : ?>
                                        <p class="special-price">
                                            <span class="price">
                                                <?= number_format($product->price) ?>
                                                vnđ
                                            </span>
                                        </p>
                                        <?php else : ?>
                                        <p class="special-price">
                                            <span class="price">
                                                <?= number_format($product->promotion_price) ?>
                                                vnđ </span>
                                        </p>
                                        <p class="old-price">
                                            <span class="price">
                                                <?= number_format($product->price) ?>
                                                vnđ
                                            </span>
                                        </p>
                                        <?php endif ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>