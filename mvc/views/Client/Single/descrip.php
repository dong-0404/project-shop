<!-- Tabs -->

<div class="tabs_section_container">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tabs_container">
                    <ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
                        <li class="tab active" data-active-tab="tab_1"><span>Description</span></li>
                        <li class="tab" data-active-tab="tab_2"><span>Additional Information</span></li>
                        <li class="tab" data-active-tab="tab_3"><span>Reviews (2)</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php
                $result = new categories;
                if (isset($_GET['id'])) {
                    // lấy ID sản phẩm từ biến GET
                    $product_id = intval($_GET['id']);
                    // lấy chi tiết sản phẩm từ đối tượng categories
                    $product = $result->Get_detail($product_id);
                    if ($product) {
                ?>
                        <!-- Tab Description -->

                        <div id="tab_1" class="tab_container active">
                            <div class="row">
                                <div class="col-lg-5 desc_col">
                                    <div class="tab_title">
                                        <h4>Description</h4>
                                    </div>
                                    <div class="tab_text_block">
                                        <h2>Pocket cotton sweatshirt</h2>
                                        <p><?php echo $product['descrip1'] ?></p>
                                    </div>
                                    <div class="tab_image">
                                        <img src="<?php echo $product['des_photo1'] ?>" alt="">
                                    </div>
                                    <div class="tab_text_block">
                                        <h2><?php echo $product['name']; ?></h2>
                                        <p><?php echo $product['descrip2']; ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-5 offset-lg-2 desc_col">
                                    <div class="tab_image">
                                        <img src="<?php echo $product['des_photo2'] ?>" alt="">
                                    </div>
                                    <div class="tab_text_block">
                                        <h2><?php echo $product['name']; ?></h2>
                                        <p><?php echo $product['descrip3']; ?></p>
                                    </div>
                                    <div class="tab_image desc_last">
                                        <img src="<?php echo $product['des_photo3'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    } // end if ($product)
                } // end if (isset($_GET['id']))
                ?>
                <!-- Tab Additional Info -->

                <div id="tab_2" class="tab_container">
                    <div class="row">
                        <div class="col additional_info_col">
                            <div class="tab_title additional_info_title">
                                <h4>Additional Information</h4>
                            </div>
                            <p>COLOR:<span>Gold, Red</span></p>
                            <p>SIZE:<span>L,M,XL</span></p>
                        </div>
                    </div>
                </div>

                <!-- Tab Reviews -->

                <div id="tab_3" class="tab_container">
                    <div class="row">

                        <!-- User Reviews -->

                        <div class="col-lg-6 reviews_col">
                            <div class="tab_title reviews_title">
                                <h4>Reviews (2)</h4>
                            </div>

                            <!-- User Review -->

                            <div class="user_review_container d-flex flex-column flex-sm-row">
                                <div class="user">
                                    <div class="user_pic"></div>
                                    <div class="user_rating">
                                        <ul class="star_rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="review">
                                    <div class="review_date">27 Aug 2016</div>
                                    <div class="user_name">Brandon William</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>

                            <!-- User Review -->

                            <div class="user_review_container d-flex flex-column flex-sm-row">
                                <div class="user">
                                    <div class="user_pic"></div>
                                    <div class="user_rating">
                                        <ul class="star_rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="review">
                                    <div class="review_date">27 Aug 2016</div>
                                    <div class="user_name">Brandon William</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Add Review -->

                        <div class="col-lg-6 add_review_col">

                            <div class="add_review">
                                <form id="review_form" action="post">
                                    <div>
                                        <h1>Add Review</h1>
                                        <input id="review_name" class="form_input input_name" type="text" name="name" placeholder="Name*" required="required" data-error="Name is required.">
                                        <input id="review_email" class="form_input input_email" type="email" name="email" placeholder="Email*" required="required" data-error="Valid email is required.">
                                    </div>
                                    <div>
                                        <h1>Your Rating:</h1>
                                        <ul class="user_star_rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        </ul>
                                        <textarea id="review_message" class="input_review" name="message" placeholder="Your Review" rows="4" required data-error="Please, leave us a review."></textarea>
                                    </div>
                                    <div class="text-left text-sm-right">
                                        <button id="review_submit" type="submit" class="red_button review_submit_btn trans_300" value="Submit">submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>