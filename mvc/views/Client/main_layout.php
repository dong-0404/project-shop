<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../public/client/styles/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/client/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../public/client/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../public/client/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../public/client/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="../public/client/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="../public/client/styles/responsive.css">
    <link rel="stylesheet" href="../public/client/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../public/client/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../public/client/styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="../public/client/styles/contact_responsive.css">
    <link rel="stylesheet" type="text/css" href="../public/client/styles/categories_styles.css">
    <link rel="stylesheet" type="text/css" href="../public/client/styles/categories_responsive.css">
</head>

<body>
    <div class="super_container">
        <div id="header">
            <?php require_once "./mvc/views/Client/pages/header.php" ?>
        </div>
        <div id="slider">
            <?php require_once "./mvc/views/Client/pages/slider.php" ?>
        </div>
        <div id="banner">
            <?php require_once "./mvc/views/Client/pages/banner.php" ?>
        </div>
        <div id="content">
            <?php require_once "./mvc/views/Client/pages/category.php" ?>
        </div>
            <div class="deal_ofthe_week">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="deal_ofthe_week_img">
                                <img src="../public/client/asset/images/deal_ofthe_week.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 text-right deal_ofthe_week_col">
                            <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                                <div class="section_title">
                                    <h2>Deal Of The Week</h2>
                                </div>
                                <ul class="timer">
                                    <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                        <div id="day" class="timer_num">03</div>
                                        <div class="timer_unit">Day</div>
                                    </li>
                                    <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                        <div id="hour" class="timer_num">15</div>
                                        <div class="timer_unit">Hours</div>
                                    </li>
                                    <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                        <div id="minute" class="timer_num">45</div>
                                        <div class="timer_unit">Mins</div>
                                    </li>
                                    <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                        <div id="second" class="timer_num">23</div>
                                        <div class="timer_unit">Sec</div>
                                    </li>
                                </ul>
                                <div class="red_button deal_ofthe_week_button"><a href="#">shop now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php require_once "./mvc/views/Client/pages/best_seller.php" ?>
        <?php require_once "./mvc/views/Client/pages/latest_blog.php" ?>
    </div>

    <div id="footer">
        <?php require_once "./mvc/views/Client/pages/footer.php" ?>
    </div>
    </div>

    <script src="../public/client/js/jquery-3.2.1.min.js"></script>
    <script src="../public/client/styles/bootstrap4/popper.js"></script>
    <script src="../public/client/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="../public/client/plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="../public/client/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="../public/client/plugins/easing/easing.js"></script>
    <script src="../public/client/js/custom.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="../public/client/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script src="../public/client/js/categories_custom.js"></script>
</body>

</html>