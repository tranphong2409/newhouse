<?php 

	//bỏ ký tự khoảng trắng,bỏ tag html,các ký tự không cho phép sql
	function str_security($s){return mysql_real_escape_string(trim(strip_tags($s)));}
	//Kiểm Tra không được Trống
	function str_notnull($s,$t){if($s==''){alert($t." "._notnull);return false;}else return true;}
	//Kiểm Tra Tồn Tại username
	function check_username($u){
		global $d;
		if($u!=''){
	        $u=str_security($u);
	        if($u=='') {return false;}
	        $d->reset();
	        $d->query("select id from #_thanhvien where (username='".$u."') or (email='".$u."') ");
	        $arr = $d->result_array();
	        if (count($arr)==0) {return true;}else{return false;}
	    }else return false;
	}
	//Kiểm tra tồn tại email
	function check_email($e,$eo){
		global $d;
		if ($e!='') {
	        $e = str_security($e);
	        if($e=='') {return false;}
		    else{
		        $d->reset();
		        if($eo==''){
		            $sql = "select id from #_thanhvien where email='".$e."'";
		        }else{
		            $eo = str_security($eo);
		            if($eo=='') {return false;}
		            $sql = "select id from #_thanhvien where email='".$e."' and email<>'".$eo."'";
		        }
		        $d->query($sql);
		        $a = $d->result_array();
		        if (count($a)==0) {return true;}
		        else{return false;}
	        }
	    }else return false;
	}
	//Lấy thông tin thành viên
	function get_info_tv($username){
		if(check_username($username)) return null;
		global $d;
		$d->query("select * from #_thanhvien where (username='".$username."') or (email='".$username."') ");
		return $d->fetch_array();
	}



	function alert($s){
		echo '<script>alert("'.$s.'");</script>';
	}
?>