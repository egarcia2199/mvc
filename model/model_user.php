<?php

include_once("model/user.php");
include_once("view/cerrar.php");

class Model_user {
    public function Create_user($username, $passw, $groupname, $folder, $department) {
        $usuario=new User($username, $passw, $groupname, $folder, $department);
        passthru('sudo ./crear_usuarios.sh '.$usuario->username.' '.$usuario->passw.' '.$usuario->groupname.' '.$usuario->folder.' '.$usuario->department);   
        return;
    }

    public function list_user() {
        passthru("./listar_usuarios.sh");
        include "view/form_list_users";
    }


    public function delete_user() {
	if(isset($_REQUEST['user'])){
	   passthru("sudo ./eliminar_usuarios.sh " . $_REQUEST['user']);
	}


    }
}

?>
