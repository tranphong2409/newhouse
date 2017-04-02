<?php
	session_start();
	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	
	@define ( '_lib' , '../libraries/');
	@define ( '_source' , '../sources/');

	if(!isset($_SESSION['lang']))
	{
	$_SESSION['lang']='vi';
	}
	$lang=$_SESSION['lang'];
    
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";
	include_once _source."lang_$lang.php";
    
	$d = new database($config['database']);

	@$dem = $_GET['dem'];

	$d->reset();
    $sql = " select id,ten_$lang,tenkhongdau,thumb from #_baiviet where hienthi=1 and noibat<>0 and type='tintuc' order by stt asc ";
    $d->query($sql);
    $rs_tintucaj = $d->result_array();

//    echo var_dump($rs_tintucaj);exit();
		
?>
<div class="item_btt item_<?=$dem?>">
    <a href="" title="<?=$rs_tintucaj[$dem]['ten_'.$lang]?>">
        <img src="<?=_upload_baiviet_l?>102x71x1/<?=$rs_tintucaj[$dem]['thumb']?>" alt="<?=$rs_tintucaj[$dem]['ten_'.$lang]?>" onerror="this.src='upload/hinhanh/102x71x1/noimage.png'"/>
        <?=catchuoi($rs_tintucaj[$dem]['ten_'.$lang],70)?>
    </a>
</div>