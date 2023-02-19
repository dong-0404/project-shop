<?php
class Category extends Controller 
{
    public $categories;

    public function __construct()
    {$this->categories = $this->model("categories");
        
    }

    public function Product ()
    {
        $this->view("sanpham", [
            "Page" => "category",
            "categories" => $this->categories->Get_all()
        ]);
    }
}
?>