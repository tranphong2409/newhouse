<?php 

	$d->reset();
	$sql_banner_top= "select photo_$lang from #_photo where type='logo'";
	$d->query($sql_banner_top);
	$logo_top = $d->fetch_array();

	$d->reset();
	$sql= "select photo_vi from #_photo where type='banner'";
	$d->query($sql);
	$banner = $d->fetch_array();

	$d->reset();
	$sqlq = " select id,ten_$lang,tenkhongdau from #_baiviet_cat where hienthi=1 order by stt asc ";
	$d->query($sqlq);
	$rs_quan = $d->result_array();

	$d->reset();
	$sqllnb = " select id,ten_$lang,tenkhongdau from #_baiviet where hienthi=1 and FIND_IN_SET(1,id_bds) and type='loaidat' order by stt asc ";
	$d->query($sqllnb);
	$rs_loainhaban = $d->result_array();

	$d->reset();
	$sqlgnb = " select id,ten_$lang,tenkhongdau from #_gia where hienthi=1 and FIND_IN_SET(1,id_bds) order by stt asc ";
	$d->query($sqlgnb);
	$rs_gianhaban = $d->result_array();

	$d->reset();
	$sqlgda = " select id,ten_$lang,tenkhongdau from #_gia where hienthi=1 and FIND_IN_SET(2,id_bds) order by stt asc ";
	$d->query($sqlgda);
	$rs_giaduan = $d->result_array();

	$d->reset();
	$sqllnt = " select id,ten_$lang,tenkhongdau from #_baiviet where hienthi=1 and FIND_IN_SET(3,id_bds) and type='loaidat' order by stt asc ";
	$d->query($sqllnt);
	$rs_loainhathue = $d->result_array();

	$d->reset();
	$sqlgnt = " select id,ten_$lang,tenkhongdau from #_gia where hienthi=1 and FIND_IN_SET(3,id_bds) order by stt asc ";
	$d->query($sqlgnt);
	$rs_gianhathue = $d->result_array();

	$d->reset();
	$sqllda = " select id,ten_$lang,tenkhongdau from #_baiviet where hienthi=1 and FIND_IN_SET(2,id_bds) and type='loaidat' order by stt asc ";
	$d->query($sqllda);
	$rs_loaiduan = $d->result_array();

	$d->reset();
	$sqldv = " select id,ten_$lang,tenkhongdau from #_baiviet where hienthi=1 and type='dichvu' order by stt asc ";
	$d->query($sqldv);
	$rs_dichvu = $d->result_array();
  
  $d->reset();
	$sqldv = " select id,ten_$lang,tenkhongdau from #_baiviet where hienthi=1 and type='tintuc' order by stt asc ";
	$d->query($sqldv);
	$rs_tintuc = $d->result_array();

	$d->reset();
	$sqlkt = " select id,ten_$lang,tenkhongdau from #_baiviet_list where hienthi=1 and type='kienthuc' order by stt asc ";
	$d->query($sqlkt);
	$rs_kienthuc = $d->result_array();

	$d->reset();
	$sql_slider = "select id,thumb_vi,link,ten_$lang from #_photo where hienthi=1 and type='slider' order by stt asc";
	$d->query($sql_slider);
	$result_slider = $d->result_array();

	$d->reset();
	$sql = "select noidung_vi from #_company where type='footer' ";
	$d->query($sql);
	$footer = $d->fetch_array();

	$d->reset();
	$sqllk = "select * from #_lkweb where hienthi=1 and type='lienket' order by stt asc ";
	$d->query($sqllk);
	$lienketw = $d->result_array();

	$d->reset();
	$sql = "select id,tenkhongdau,ten_$lang from #_baiviet_list where hienthi=1 and type='kienthuc' order by stt asc ";
	$d->query($sql);
	$kt_list = $d->result_array();

	$arr_ktlisst = array();
	for($i=0;$i<count($kt_list);$i++){
		$arr_ktlisst[$i] = $kt_list[$i]['tenkhongdau'];
	}
  // array_push($arr_ktlisst,"dang-ky","dang-nhap");
	// echo var_dump($arr_ktlisst);

?>