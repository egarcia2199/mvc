<?php
include_once("model/model_group.php");
include_once("view/cerrar.php");

class Controller_create_group {
    public $model;
    
    public function __construct()  
    {  
	$this->model = new Model_group();
    }

  public function invoke()
    {
        if (!isset($_REQUEST['creategr']))
        {
            // web por defecto
            include 'view/form_create_group.php';
        }
        else
        {
            print_r($_REQUEST);
            $this->model->create_group($_REQUEST['group']);
            include 'view/form_create_group.php';
        }
    }
}
?>


	