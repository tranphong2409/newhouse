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
	$sql = "select * from #_duong where id_huyen='".$id_huyen."' order by stt,id asc";
	$d->query($sql);
	$duong = $d->result_array();
?>

<option value="">Đường</option>

<?php for ($i=0; $i <count($duong) ; $i++) { ?>
	<option value="<?=$duong[$i]['id']?>"><?=$duong[$i]['ten']?></option>
<?php } ?>
