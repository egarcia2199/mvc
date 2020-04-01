<?php

session_start();


class Controller {

    public $model;


    public function __construct()  {  }


    public function invoke(){
	if (isset($_REQUEST['principal'])) {
            unset($_SESSION['option']);
        }


        if (isset($_REQUEST['option'])) {
            $_SESSION['option']=$_REQUEST['option'];
        }

        if (!isset($_SESSION['option'])) {
            include 'view/main_page.php';
        }


        else {

            switch($_SESSION['option']) {

            case 'create':
                include 'controller/Controller_create_user.php';
                $controller = new Controller_create_user();
                $controller->invoke();    

            break;

 	    case 'list':
                include 'controller/Controller_list_user.php';
                $controller = new Controller_list_user();
                $controller->invoke();    

            break;

	    case 'delete':
                include 'controller/Controller_delete_user.php';
                $controller = new Controller_delete_user();
                $controller->invoke();    

            break;
 
	    case 'creategr':
                include 'controller/Controller_create_group.php';
                $controller = new Controller_create_group();
                $controller->invoke();    

            break;

 	    case 'listgr':
                include 'controller/Controller_list_group.php';
                $controller = new Controller_list_group();
                $controller->invoke();    

            break;

	    case 'deletegr':
                include 'controller/Controller_delete_group.php';
                $controller = new Controller_delete_group();
                $controller->invoke();    

            break;

            }

        }

    }

}


?>





