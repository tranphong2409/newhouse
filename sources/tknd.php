<?php  if(!defined('_source')) die("Error");

	$title_detail = _timkiem;

	if(!empty($_POST)){

		$typend = $_POST['type'];
		$quanhuyen = $_POST['quanhuyen'];
		$gia = $_POST['gia'];
		$dientich = $_POST['dientich'];//id_dientich
		$loaidat = $_POST['loaidat'];
		$huong = $_POST['huong'];
		$sophong = $_POST['sophong'];
		$phuongxa = $_POST['phuongxa'];

		@$comnd = '';

		if($typend=='nhaban'){
			$comnd = 'nha-dat-ban';
		}elseif($typend=='duan'){
			$comnd = 'du-an-dat';
		}else{
			$comnd = 'cho-thue';
		}

		$tukhoa = $_POST['tukhoabds'];

		$key_khong_dau = changeTitle($tukhoa);

		$d->reset();
		$sql = " select giatu,giaden from #_gia where id='".$gia."' ";
		$d->query($sql);
		$giatim = $d->fetch_array();

		$per_page = 10; // Set how many records do you want to display per page.
		$startpoint = ($page * $per_page) - $per_page;
		$limit = ' limit '.$startpoint.','.$per_page;
		
		$where = " #_product where hienthi=1 and type='".$typend."' ";
		if($tukhoa!='')
		{
			$where.=" and ten_$lang like'%$tukhoa%' or tenkhongdau like'%$key_khong_dau%' or ( id_list IN (SELECT id FROM #_product_list where ten_$lang like'%$tukhoa%') ) or ( id_cat IN (SELECT id FROM #_product_cat where ten_$lang like'%$tukhoa%') ) or ( id_item IN (SELECT id FROM #_product_item where ten_$lang like'%$tukhoa%') ) ";

		}
		if($loaidat!=0)
		{
			$where.=" and id_loaidat='".$loaidat."' ";
		}
		// if($tinhthanh!=0)
		// {
		// 	$where.=" and id_tinhthanh='".$tinhthanh."' ";
		// }
		if($quanhuyen!=0)
		{
			$where.=" and id_quanhuyen='".$quanhuyen."' ";
		}
		if($phuongxa!=0)
		{
			$where.=" and id_phuongxa='".$phuongxa."' ";
		}
		// if($duongpho!=0)
		// {
		// 	$where.=" and id_duongpho='".$duongpho."' ";
		// }
		if($dientich!='')
		{
			$where.=" and id_dientich='".$dientich."' ";
		}
		if($sophong!='')
		{
			$where.=" and sophong='".$sophong."' ";
		}
		if($huong!='')
		{
			$where.=" and id_huong='".$huong."' ";
		}
		if($gia!=0)
		{
			$where.=" and giaban>=".$giatim['giatu']." and giaban<=".$giatim['giaden']." ";
		}

		$where .= " order by stt,ngaytao desc";

		$sql = "select id,tenkhongdau,ten_$lang,thumb,id_loaidat,id_tinhthanh,id_quanhuyen,giaban,sophong,id_huong,id_phaply,dientich from $where $limit";
		$d->query($sql);
		$product = $d->result_array();

		//echo $sql;

		$url = getCurrentPageURL();
		$paging = pagination($where,$per_page,$page,$url);
	}
?>