<?php
	session_start();
	$session=session_id();
	if(!isset($_SESSION['lang']))
	{
	$_SESSION['lang']='vi';
	}
	$lang=$_SESSION['lang'];
	
	@define ( '_lib' , '../libraries/');
	@define ( '_source' , '../sources/');
    
	include_once _lib."config.php";
	include_once _lib."constant.php";;
	include_once _lib."functions.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";
	include_once _source."lang_$lang.php";
	
	$d = new database($config['database']);
	
	$id_duongpho = $_GET['id_duongpho'];
		
	$d->reset();
	$sql = "select id,ten_$lang from #_baiviet_sub where hienthi=1 and type='tinhthanh' and id_cat ='".$id_duongpho."' ";
	$d->query($sql);
	$duongpho = $d->result_array();
	
?>
<option value="">Đường/Phố</option>
<?php for($i=0;$i<count($duongpho);$i++){?>
<option value="<?=$duongpho[$i]['id']?>"><?=$duongpho[$i]['ten_'.$lang]?></option>
<?php } ?>
