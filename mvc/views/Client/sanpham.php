<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../public/client/styles/bootstrap4/bootstrap.min.css">
    <link href="../public/client/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../public/client/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../public/client/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../public/client/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" href="../public/client/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../public/client/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../public/client/styles/single_styles.css">
    <link rel="stylesheet" type="text/css" href="../public/client/styles/single_responsive.css">
</head>

<body>
    <div class="super_container">
        <header class="header trans_300">
            <?php require_once "./mvc/views/Client/pages/header.php" ?>
        </header>
        <div>
            <?php require_once "./mvc/views/Client/Single/hamburger.php"; ?>
            <?php require_once "./mvc/views/Client/Single/descrip.php"; ?>
        </div>
        <footer class="footer">
            <?php require_once "./mvc/views/Client/pages/footer.php" ?>
        </footer>
    </div>

    <script src="../public/client/js/jquery-3.2.1.min.js"></script>
    <script src="../public/client/styles/bootstrap4/popper.js"></script>
    <script src="../public/client/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="../public/client/plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="../public/client/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="../public/client/plugins/easing/easing.js"></script>
    <script src="../public/client/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script src="../public/client/js/single_custom.js"></script>
</body>

</html>