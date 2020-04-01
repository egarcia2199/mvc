<?php

class User {
    public $username;
    public $passw;
    public $groupname;
    public $folder;
    public $department;
    
    public function __construct($username, $passw, $groupname, $folder, $department)     {  
        $this->passw = $passw;
 	$this->username = $username;
    	$this->groupname = $groupname;
   	$this->folder = $folder;
   	$this->department = $department;
    }
}

?>
