<?php
class H_admin extends controller 
{
    public $Admin;
    public function __construct()
    {
        $this->Admin = $this->model("Admin");
    }

    public function Admin ()
    {
        $this->view2("Block", [
            "Page" => "h_admin"
        ]);
    }
}
?>