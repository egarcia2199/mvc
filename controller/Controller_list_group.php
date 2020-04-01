<?php
include_once("model/model_group.php");
include_once("view/cerrar.php");

class Controller_list_group {
    public $model;
    
    public function __construct()  
    {  
	$this->model = new Model_group();
    }

    public function invoke()
    {
	 if (!isset($_REQUEST['listgr']))
   	 {	
   		 // web por defecto
   		 include 'view/form_list_group.php';
   	 }
   	 else
   	 {
   		 #print_r($_REQUEST);
   		 $this->model->list_group();
   		 include 'view/form_list_group.php';
   	 }
    }
}
?>
?>


	