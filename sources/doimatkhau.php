<?php if(!defined('_source')) die("Error");
	
	include_once 'dkdn_custom/function_dkdn.php';
	$title= $title_cat = _doimatkhau;
	if(!isset($_SESSION['login_web']) || $_SESSION['login_web']["username"]==''){
		//chưa đăng nhập
		transfer(_chuadangnhap,"http://".$config_url."/dang-nhap",false);
	}
	if(!empty($_POST)) {
		$username = $_SESSION['login_web']["username"];
		$error = true;
		$error2 = true;
		//Kiểm tra các trường không được rỗng
		if(str_notnull($password = str_security($_POST["password"]),_matkhau))
			if(str_notnull($password2 = str_security($_POST["password2"]),_matkhau))
				if(str_notnull($re_password = str_security($_POST["re_password"]),_matkhau))
					$error = true;
				else $error = false;
			else $error = false;
		else $error = false;
		#===========================================================
		//Kiểm tra điều kiện
		if($error){
			
			//các trường đã đủ
			
				if(!check_username($username)){
					//lấy thông tin
					$info_tv = get_info_tv($username);
					if($info_tv["password"]==md5($password))
						if($_POST["password2"] == $_POST["re_password"])
							$error2 = true;
						else{
							//nhập lại mk sai
							$error2 = false;
							alert(_nhaplaimatkhau._sai);
						}
					else{
						//sai mật khẩu
						alert(_sai._matkhau);
						$error2 = false;
					}
				}else{
					//username ko tồn tại
					$error2 = false; 
					alert(_usernamenull);
				}
		
		}
		#===========================================================
		//Không Có Lỗi
		if($error && $error2){
			
			$info_tv = get_info_tv($username);
			$sql="update #_thanhvien set password='".md5($_POST["password2"])."' where id=".$info_tv["id"];
			if($d->query($sql)){
				//đổi mật khẩu thành công
				transfer(_doimkthanhcong,"http://".$config_url."/dang-nhap");
			}else{
				//đổi mật khẩu thất bại
				alert(_luudatafalse);
			}
		}
	}

?>