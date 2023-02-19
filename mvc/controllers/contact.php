<?php
class Contact extends Controller 
{
    public $categories;

    public function __construct()
    {
        $this->categories = $this->model("categories");
    }

    public function Me ()
    {
        $this->view("main_layout", [
            "Page" => "contact"
        ]);
    }
}
?>