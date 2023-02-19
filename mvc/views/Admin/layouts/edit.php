<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ADD Blog</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ADD Category
                            <a href="http://localhost/manager/Home/Admin" class="btn-btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="./Addblog" method="POST">
                        <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Price</label>
                                <input type="number" name="Price" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Image</label>
                                <input type="text" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>product_category</label>
                                <input type="text" name="product_category" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_product" class="btn-btn-success">Save-Product</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php if (isset($data["result"])) { ?>
        <h3><?php
            if ($data["result"] == "true") {
                echo "Đăng kí thành công";
            } else {
                echo "Đăng kí thất bại";
            }
        } ?></h3>


</body>

</html>