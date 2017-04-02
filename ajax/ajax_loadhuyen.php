<?php
	 $id_tinh = intval($_POST["id_tinh"]);

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
	$sql = "select * from #_huyen where id_tinh='".$id_tinh."' order by stt,id asc";
	$d->query($sql);
	$huyen = $d->result_array();
?>
<option value="">Quận/Huyện</option>
<?php for ($i=0; $i <count($huyen) ; $i++) { ?>
	<option value="<?=$huyen[$i]['id']?>"><?=$huyen[$i]['ten']?></option>
<?php } ?>
