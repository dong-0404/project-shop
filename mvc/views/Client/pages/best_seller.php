	<!-- Best Sellers -->

	<div class="best_sellers">
	    <div class="container">
	        <div class="row">
	            <div class="col text-center">
	                <div class="section_title new_arrivals_title">
	                    <h2>Best Sellers</h2>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col">
	                <div class="product_slider_container">
	                    <div class="owl-carousel owl-theme product_slider">
	                        <?php
                            $product = new categories;
                            // $kq = $data["categories"];
                            $kq = $product->Get_all();
                            ?>
	                        <?php
                            foreach ($kq as $item) {
                            ?>
	                            <!-- Slide 1 -->
	                            <div class="owl-item product_slider_item">
	                                <div class="product-item">
	                                    <div class="product discount">
	                                        <div class="product_image">
	                                            <img src="<?php echo $item['image']; ?>" alt="">
	                                        </div>
	                                        <div class="favorite favorite_left"></div>
	                                        <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
	                                        <div class="product_info">
	                                            <h6 class="product_name"><a href="single.html"><?php echo $item['name']; ?></a></h6>
	                                            <div class="product_price"><?php echo $item['price']; ?><span>$590.00</span></div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        <?php } ?>
	                    </div>

	                    <!-- Slider Navigation -->

	                    <div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
	                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
	                    </div>
	                    <div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
	                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>