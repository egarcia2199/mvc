<?php
include_once("model/model_user.php");
include_once("view/cerrar.php");

class Controller_list_user {
    public $model;
    
    public function __construct()  
    {  
	$this->model = new Model_user();
    }

    public function invoke()
    {
	if (!isset($_REQUEST['list']))
	{
	    // web por defecto
	    include 'view/form_list_user.php';
	}
   }
}
?>