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
	
	
	$id=$_POST['id_input'];



		$file['name'] = $_FILES['file']['name'];
		$file['type'] = $_FILES['file']['type'];
		$file['tmp_name'] = $_FILES['file']['tmp_name'];
		$file['error'] = $_FILES['file']['error'];
		$file['size'] = $_FILES['file']['size'];

		$file_name = changeTitle(images_name($_FILES['file']['name']));

		$photo = upload_image_at($file, 'jpg|png|gif|PNG|GIF|JPG|JPEG|jpeg', "../upload/baiviet/",$file_name);
		$data1['photo'] = $photo;
		$data1['thumb'] = create_thumb($data1['photo'], 108, 108, _upload_baiviet,$file_name,1);	

		$d->setTable('thanhvien');
		$d->setWhere('id', $id);
		$d->update($data1);
?>
