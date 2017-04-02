<?php
	session_start();
	@define ( '_template' , '../templates/');
	@define ( '_lib' , '../libraries/');
	@define ( '_source' , '../sources/');	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";

    
	$d = new database($config['database']);
		
	@$noidung = $_GET['noidung']; //echo $emaild;
	@$ten = $_GET['ten'];
	@$email = $_GET['email'];

	$d->reset();
	$sql = "select id from #_booking where noidung='".$noidung."' and ten='".$ten."' and email='".$email."' ";
	$d->query($sql);
	$maill = $d->result_array();


	
	if(count($maill)!=0){
		echo 1;
	} else {

		if(isset($email)){
			$data['email'] = $email;
			$data['ten'] = $ten;
			$data['noidung'] = $noidung;
			$data['ngaytao'] = time();
			$d->setTable('booking');
			if($d->insert($data))
				echo 0;
			else
				echo 2;
		}
		
	}
?>
