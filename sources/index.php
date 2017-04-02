<?php

	$per_page = 100; // Set how many records do you want to display per page.
	$startpoint = ($page * $per_page) - $per_page;
	$limit = ' limit '.$startpoint.','.$per_page;

	$where = " #_product where hienthi=1 and type='nhaban' order by stt asc ";

	$d->reset();
	$sql = " select id,tenkhongdau,ten_$lang,thumb,id_loaidat,id_tinhthanh,id_quanhuyen,giaban,sophong,id_huong,id_phaply,dientich,noibat from $where $limit ";
	$d->query($sql);
	$product = $d->result_array();

	$url = "trang-chu.html";
	//$paging = pagination($where,$per_page,$page,$url);


	// $page1 = 1;
	// $per_page1 = 12; // Set how many records do you want to display per page.
	// $startpoint1 = ($page1 * $per_page1) - $per_page1;
	// $limit1 = ' limit '.$startpoint1.','.$per_page1;

	// $where1 = " #_product where hienthi=1 and type='nhaban' order by stt asc ";

	// $d1->reset();
	// $sql1 = " select id,tenkhongdau,ten_$lang,thumb,id_loaidat,id_tinhthanh,id_quanhuyen,giaban,sophong,id_huong,id_phaply,dientich,noibat from $where $limit ";
	// $d1->query($sql1);
	// $product1 = $d1->result_array();

	// $url1 = "trang-chu.html";
	// $paging1 = pagination($where1,$per_page1,$page1,$url1);


?>