<?php
    $page = 1;
	$per_page = 100; // Set how many records do you want to display per page.
	$startpoint = ($page * $per_page) - $per_page;
	$limit = ' limit '.$startpoint.','.$per_page;

	$where = " #_product where hienthi=1 and type='nhaban' and noibat=0 order by stt asc ";

	$d->reset();
	$sql = " select id,tenkhongdau,ten_$lang,thumb,id_loaidat,id_tinhthanh,id_quanhuyen,giaban,sophong,id_huong,id_phaply,dientich,noibat,description from $where $limit ";
	$d->query($sql);
	$product = $d->result_array();

	$url = "trang-chu";
//	$paging = pagination($where,$per_page,$page,$url);

//    $page1 = 1;
//    $page1 = $_GET['page1'];
//    $per_page1 = 100; // Set how many records do you want to display per page.
//    $startpoint1 = ($page * $per_page1) - $per_page1;
//    $limit1 = ' limit '.$startpoint1.','.$per_page1;

    $where1 = " #_product where hienthi=1 and type='nhaban' and noibat=1 order by stt asc ";

    $d->reset();
    $sql1 = " select id,tenkhongdau,ten_$lang,thumb,id_loaidat,id_tinhthanh,id_quanhuyen,giaban,sophong,id_huong,id_phaply,dientich,noibat,description from $where1 $limit ";
    $d->query($sql1);
    $noibat = $d->result_array();
//    $url1 = "trang-chu";
//    $paging1 = pagination($where1,$per_page1,$page1,$url1);


?>