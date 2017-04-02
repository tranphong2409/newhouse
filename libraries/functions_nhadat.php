<?php
	// function get_tinhthanh($idtt){
		// global $d, $row,$lang;
		// $sql = "select ten_$lang from #_baiviet_list where id='".$idtt."'";
		// $d->query($sql);
		// $row = $d->fetch_array();
		// return $row['ten_'.$lang];
	// }
  function get_loaitin($id){
	if($id==0)
	{
		global $d;
		$d->query("select type from #_product order by id,stt asc");
		return $d->result_array();
	}else
	{
		global $d;
		$d->query("select type from #_product where id='".$id."' order by id,stt asc");
		return $d->fetch_array();
	}
	
}
function get_loainhadat($id){
	if($id==0)
	{
		global $d;
		$d->query("select ten_vi,id from table_baiviet where type='loaidat' order by stt asc");
		return $d->result_array();
	}else
	{
		global $d;
		$d->query("select ten_vi,id,tenkhongdau from table_baiviet where id='".$id."' and type='loaidat' order by id,stt asc");
		return $d->fetch_array();
	}
	
}
	function get_quanhuyen($idqh){
		global $d, $row,$lang;
		$sql = "select ten_$lang from #_baiviet_cat where id='".$idqh."'";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['ten_'.$lang];
	}

	function get_phuongxa($idpx){
		global $d, $row,$lang;
		$sql = "select ten_$lang from #_baiviet_item where id='".$idpx."'";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['ten_'.$lang];
	}

	function get_duongpho($iddp){
		global $d, $row,$lang;
		$sql = "select ten_$lang from #_baiviet_sub where id='".$iddp."'";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['ten_'.$lang];
	}

	function get_loaidat_i($idld){
		global $d, $row,$lang;
		$sql = "select ten_$lang from #_baiviet where id='".$idld."'";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['ten_'.$lang];	
	}
	function get_phongngu($idpn){
		global $d, $row,$lang;
		$sql = "select ten_$lang from #_baiviet where id='".$idpn."'";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['ten_'.$lang];	
	}
	function get_phongtam($idpt){
		global $d, $row,$lang;
		$sql = "select ten_$lang from #_baiviet where id='".$idpt."'";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['ten_'.$lang];	
	}
	function get_giayto($idgt){
		global $d, $row,$lang;
		$sql = "select ten_$lang from #_baiviet where id='".$idgt."'";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['ten_'.$lang];	
	}
	function get_huong($id){
		global $d, $row,$lang;
		$sql = "select ten_$lang from #_baiviet where id='".$id."'";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['ten_'.$lang];	
	}
?>