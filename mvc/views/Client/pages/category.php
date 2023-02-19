<?php
$product = new categories;
// $kq = $data["categories"];
$kq = $product->Get_all();
?>
<!-- New Arrivals -->
<div class="new_arrivals">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title new_arrivals_title">
                    <h2>New Arrivals</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col text-center">
                <div class="new_arrivals_sorting">
                    <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">women's</li>
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">accessories</li>
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">men's</li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
                    <?php
                    foreach ($kq as $item) {
                    ?>
                        <!-- Product 1 -->

                        <div class="product-item <?php echo $item['product_category']; ?>">
                            <div class="product discount product_filter">
                                <div class="product_image">
                                    <img src="<?php echo $item['image']; ?>" alt="">
                                </div>
                                <div class="favorite favorite_left"></div>
                                <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="http://localhost/shop/Category/Product?id=<?php echo $item['id'];?>"><?php echo $item['name']; ?></a></h6>
                                    <div class="product_price"><?php echo $item['price']; ?><span>$590.00</span></div>
                                </div>
                            </div>
                                <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>
                        <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>