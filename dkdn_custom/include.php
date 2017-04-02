<?php 
	session_start();
    @define ( '_lib' , '../libraries/');
    include_once _lib."config.php";
    include_once _lib."class.database.php";
    $d = new database($config['database']);
    include_once _lib."functions.php";
    include_once "function_dkdn.php";
    
?>