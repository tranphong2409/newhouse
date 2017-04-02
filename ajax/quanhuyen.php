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
	
	$id_tinh = $_GET['id_tinh'];
		
	$d->reset();
	$sql = "select id,ten_$lang from #_baiviet_cat where hienthi=1 and type='tinhthanh' and id_list ='".$id_tinh."' ";
	$d->query($sql);
	$quanhuyen = $d->result_array();
	
?>
<option value="">Quận/Huyện</option>
<?php for($i=0;$i<count($quanhuyen);$i++){?>
<option value="<?=$quanhuyen[$i]['id']?>"><?=$quanhuyen[$i]['ten_'.$lang]?></option>
<?php } ?>
