<?php
class All_product extends Controller 
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
            "Page" => "all_product"
        ]);
    }
}

