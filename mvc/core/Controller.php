<?php
class Controller{

    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[]){
        require_once "./mvc/views/Client/".$view.".php";
    }
    public function view1($view, $data=[]){
        require_once "./mvc/views/Admin/".$view.".php";
    }
    public function view2($view, $data=[]){
        require_once "./mvc/views/Admin/layouts/".$view.".php";
    }

}
?>