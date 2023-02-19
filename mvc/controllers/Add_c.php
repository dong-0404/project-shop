<?php
class Add_c extends Controller 
{
    public $Admin;
    public $categories;


    public function __construct()
    {
        $this->Admin = $this->model("Admin");
        $this->categories = $this->model("categories");
    }

    public function product ()
    {
        $this->view2("Block", [
            "Page" => "add"
        ]);
    }
    public function Addblog() 
    {
// 1. get data khách hàng nhập
if (isset($_POST["save_product"])) {
    $name = $_POST['name'];
    $price = intval($_POST['price']);
    $image = $_POST['image'];
    $product_category = $_POST['product_category'];
    // $createdate = date('Y-m-d H:i:s');

    // 2.Insert database bằng user
    $kq = $this->Admin->InsertNewProduct($name,$price,$image,$product_category);

    } 
    $this->view2("Block", [
        "Page" => "add"
    ]);
}
public function deleteProduct()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if ($this->Admin->deleteProduct($id)) {
            echo "Xóa sản phẩm thành công.";
        } else {
            echo "Xóa sản phẩm không thành công.";
        }
    } else {
        echo "Invalid Id";
    }
}
}

