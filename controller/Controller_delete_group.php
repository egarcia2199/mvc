<?php
include_once("model/model_group.php");
include_once("view/cerrar.php");

class Controller_delete_group {
    public $model;
    
    public function __construct()  
    {  
	$this->model = new Model_group();
    }

    public function invoke()
    {
	if (!isset($_REQUEST['deletegr']))
	{
	    include 'view/form_delete_group.php';

	} else {
		include 'view/form_delete_group.php';
		$this->model->delete_group();
	}
   }
}
?>


	