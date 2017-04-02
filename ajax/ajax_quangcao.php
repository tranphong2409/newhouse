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
	include_once _lib."class.database.php";
	include_once _source."lang_$lang.php";
    
	$d = new database($config['database']);

	@$demqc = $_GET['demqc'];

	  $d->reset();
	  $sql = "select id,thumb_vi,link,ten_vi from #_photo where hienthi=1 and type='imgtrangchu' order by stt asc ";
	  $d->query($sql);
	  $quangcao = $d->result_array();

    //echo var_dump($rs_tintucaj);exit();
		
?>
<div class="imgqc">
	<a href="<?=$rs_qc[$demqc]['link']?>" target="_blank" title="<?=$rs_qc[$demqc]['ten_vi']?>"><img src="<?=_upload_hinhanh_l?>270x300x2/<?=$rs_qc[$demqc]['thumb_vi']?>" alt="<?=$rs_qc[$demqc]['ten_vi']?>" onerror="this.src='upload/hinhanh/270x300x1/noimage.png'"/></a>
	<div class="clear" style="height:10px;"></div>
</div>