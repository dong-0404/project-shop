<!DOCTYPE html>
<html>

<head>
    <title>Danh sách sản phẩm</title>
    <style type="text/css">
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .product-item {
            width: 30%;
            margin-bottom: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            padding: 10px;
            text-align: center;
            position: relative;
        }

        .product-image {
            max-width: 100%;
            height: auto;
        }

        .product-delete {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: red;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <ul class="product-list">
        <?php
        $product = new categories;
        // $kq = $data["categories"];
        $kq = $product->Get_all();
        ?>
        <?php
        foreach ($kq as $item) {
        ?>
            <li class="product-item" id="product-1">
                <h4><?php echo $item['name'] ?></h4>
                <p>Giá:<?php echo $item['price'] ?>.000 đồng</p>
                <img class="product-image" src="<?php echo $item['image'] ?>" alt="Sản phẩm 1">
                <p>Giới tính: <?php echo $item['product_category'] ?></p>
                <button type="button" class="btn btn-danger" name ="delete_product">
                    <a style="color:white" href="http://localhost/shop/Add_c/deleteProduct?id=<?php echo $item['id']; ?>">Delete</a>
                </button>
            </li>
        <?php } ?>
    </ul>
</body>

</html>