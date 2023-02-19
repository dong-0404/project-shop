<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// http://localhost/live/Home/Show/1/2

class Home extends Controller{

    
    public $categories;

    public function __construct()
    {
        $this->categories = $this->model("categories");
    }

    public function Colo () {
        $this->view("main_layout", [
            "Page" => "layout"

        ]);
    }
    
}
?>