<?php
include_once("model/model_user.php");
include_once("view/cerrar.php");

class Controller_create_user {
    public $model;
    
    public function __construct()  
    {  
	$this->model = new Model_user();
    }

  public function invoke()
    {
        if (!isset($_REQUEST['create']))
        {
            // web por defecto
            include 'view/form_create_user.php';
        }
        else
        {
            $this->model->create_user($_REQUEST['username'],$_REQUEST['passw'],$_REQUEST['groupname'],$_REQUEST['folder'],$_REQUEST['department']);
            include 'view/form_create_user.php';
        }
    }
}
?>


	