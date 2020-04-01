<?php
include_once("model/model_user.php");
include_once("view/cerrar.php");

class Controller_delete_user {
    public $model;
    
    public function __construct()  
    {  
	$this->model = new Model_user();
    }

    public function invoke()
    {
	if (!isset($_REQUEST['eliminar']))
	{
	    include 'view/form_delete_user.php';

	} else {
		include 'view/form_delete_user.php';
		$this->model->delete_user();
	}
   }
}
?>