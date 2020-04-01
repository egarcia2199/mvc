<?php

include_once("model/group.php");
include_once("view/cerrar.php");

class Model_group {
	   public function Create_group($group) {

	   	 $group=new Group($group);
	   	 passthru('sudo ./crear_grupos.sh '.$group->group);   	 
	   	 return;
	    }

	   public function list_group() {
	
		 $salida = shell_exec('sudo ./listar_grupos.sh');
		 include 'view/form_list_group.php';
	    }

	   public function delete_group() {

		if(isset($_REQUEST['group'])){
		passthru("sudo ./eliminar_grupos.sh " . $_REQUEST['group']);
	  }
     }
}

?>