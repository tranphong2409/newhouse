<?php  if(!defined('_source')) die("Error");
		

		$title_detail = _timkiem;

		$id_list=trim($_GET['id_list']);
		$key=trim($_GET['keywords']);
		$key_khong_dau=changeTitle($key);

		$per_page = 10; // Set how many records do you want to display per page.
		$startpoint = ($page * $per_page) - $per_page;
		$limit = ' limit '.$startpoint.','.$per_page;
		
		$where = " #_product where hienthi=1 and type='product' ";
		$ten=trim($_POST['timkiem']);
		if($key!='')
		{
			$where.=" and ten_$lang like'%$key%' or tenkhongdau like'%$key_khong_dau%' or ( id_list IN (SELECT id FROM #_product_list where ten_$lang like'%$key%') ) or ( id_cat IN (SELECT id FROM #_product_cat where ten_$lang like'%$key%') ) or ( id_item IN (SELECT id FROM #_product_item where ten_$lang like'%$key%') ) ";

		}
		if($id_list!='')
		{
			$where.=" and id_list='".$id_list."' ";
		}
		$where .= " order by stt,ngaytao desc";

		$sql = "select id,tenkhongdau,ten_$lang,thumb,id_loaidat,id_tinhthanh,id_quanhuyen,id_phuongxa,id_duongpho,sophong,huong,giaban,diachi_vi from $where $limit";
		$d->query($sql);
		$product = $d->result_array();

		$url = getCurrentPageURL();
		$paging = pagination($where,$per_page,$page,$url);

?>