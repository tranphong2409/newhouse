<?php
	 $id_huyen = intval($_POST["id_huyen"]);

	session_start();
	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	@define ( '_lib' , '../libraries/');
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	$lang = "vi";
	include_once _lib."functions.php";
	
	$d->reset();
	$sql = "select * from #_xa where id_huyen='".$id_huyen."' order by stt,id asc";
	$d->query($sql);
	$xa = $d->result_array();
?>

<option value="">Xã/Phường</option>

<?php for ($i=0; $i <count($xa) ; $i++) { ?>
	<option value="<?=$xa[$i]['id']?>"><?=$xa[$i]['ten']?></option>
<?php } ?>
