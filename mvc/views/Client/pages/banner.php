    <!-- Banner -->
    <?php
    $type = new categories;
    $kq = $type->Get_type();
    ?>
    <div class="banner">
        <div class="container">
            <div class="row">
                <?php
                foreach ($kq as $item) {
                ?>
                    <div class="col-md-4">
                        <div class="banner_item align-items-center" style="background-image:url(<?php echo $item['image']; ?>)">
                            <div class="banner_category">
                                <a href="categories.html"><?php echo $item['type']; ?></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>