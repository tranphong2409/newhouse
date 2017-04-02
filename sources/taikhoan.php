<?php if(!defined('_source')) die("Error");
	
	include_once 'dkdn_custom/function_dkdn.php';
	$title= $title_cat = _thongtintk;


	if($_SESSION['login_web']['loai']==1)
	{

			if(!isset($_SESSION['login_web']) || $_SESSION['login_web']["email"]=='')
			{
						//chưa đăng nhập
						transfer(_chuadangnhap,"http://".$config_url."/dang-nhap",false);
			}
			//lấy thông tin thành viên
			$email = $_SESSION['login_web']["email"];

			$info_tv = get_info_tv($email);
			
			if (!empty($_POST)) {
				$error = true;
				$error2 = true;
				//Kiểm tra các trường không được rỗng
				 
				
						 
							if(str_notnull($email = str_security($_POST["email"]),"Email"))
								if(str_notnull($hoten = str_security($_POST["hoten"]),_hoten))
									$error = true;
								else $error = false;
							else $error = false;
						
				
				
				#===========================================================
				//Kiểm tra điều kiện
				if($error){
					
						if(check_email($email,$_SESSION['login_web']["email"])){
							$info_tv = get_info_tv($email);
							
						}
						else{ 
							//email đã tồn tại
							$error2 = false;
							alert("Email "._datontai);
						} 
					
				}

				#===========================================================
				if($error && $error2){
					
					//data save
						


							$data['email'] = $email;
							$data['hoten'] = $hoten;

							$data['bidanh'] = $_POST['bidanh'];


							$data['ngaysinh'] = $_POST['ngaysinh'];


							$data['id_tinh'] = (int)$_POST['tinh'];

							$data['id_huyen'] = (int)$_POST['huyen'];

							$data['id_xa'] = (int)$_POST['xa'];

							$data['dienthoaiban'] = (int)$_POST['dienthoaiban'];

							$data['yahoo'] = $_POST['yahoo'];

							$data['skype'] = $_POST['skype'];

							// if($_POST['taikhoan']!=""){

								// $data['taikhoan'] = (int)$_POST['taikhoan'];
							// }
							

							$data['diachi'] = $_POST['khuvuc'];

							$data['mota'] = $_POST['mota'];

							$data['tengiaodich'] = $_POST['tengiaodich'];

							$data['ngaythanhlap'] = $_POST['ngaythanhlap'];

							$data['khuvuchd'] = $_POST['khuvuchd'];

							$data['id_loaitin'] = $_POST['linhvuc'];

							$data['id_loaihinh'] = $_POST['loaihinh_tk'];

							$data['fax'] = $_POST['fax'];

							$data['maso'] = $_POST['maso'];

							$data['website'] = $_POST['website'];

							$data['facebook'] = $_POST['facebook'];

							$data['dienthoai'] = $_POST['dienthoai'];
							$data['gioitinh'] = (int)$_POST['gioitinh'];
							$data['noidung'] = $_POST['noidung'];



							$data['ngaysua'] = time();
							$d->setTable('thanhvien');
							$d->setWhere("email",$info_tv["email"]);
							if($d->update($data)){
								$_SESSION['login_web']["email"] = $email;

								$_SESSION['login_web']["success"] = true;

								transfer(_capnhattc,"http://".$config_url."/tai-khoan");
							}
							else{
								alert("Cập nhật thất bại");
							}
						}
						
					}
					$info_tv = get_info_tv($email);

			

	}else
	{

			if(!isset($_SESSION['login_web']) || $_SESSION['login_web']["username"]=='')
			{
						//chưa đăng nhập
						transfer(_chuadangnhap,"http://".$config_url."/dang-nhap",false);
			}
			//lấy thông tin thành viên
			$username = $_SESSION['login_web']["username"];
			
			if (!empty($_POST)) {
				$error = true;
				$error2 = true;
				//Kiểm tra các trường không được rỗng
				 
					if(str_notnull($username = str_security($_POST["username"]),_tendn)) 
						 
							if(str_notnull($email = str_security($_POST["email"]),"Email"))
								if(str_notnull($hoten = str_security($_POST["hoten"]),_hoten))
									$error = true;
								else $error = false;
							else $error = false;
						
					else $error = false;
				
				#===========================================================
				//Kiểm tra điều kiện
				if($error){
					
						if(check_email($email,$_SESSION['login_web']["email"])){
							$info_tv = get_info_tv($username);
							
						}
						else{ 
							//email đã tồn tại
							$error2 = false;
							alert("Email "._datontai);
						} 
					
				}

				#===========================================================
				if($error && $error2){
					
					//data save
							$info_tv = get_info_tv($username);


							$data['email'] = $email;
							$data['hoten'] = $hoten;

							$data['bidanh'] = $_POST['bidanh'];


							$data['ngaysinh'] = $_POST['ngaysinh'];


							$data['id_tinh'] = (int)$_POST['tinh'];

							$data['id_huyen'] = (int)$_POST['huyen'];

							$data['id_xa'] = (int)$_POST['xa'];

							$data['dienthoaiban'] = $_POST['dienthoaiban'];

							$data['mota'] = $_POST['mota'];

							$data['yahoo'] = $_POST['yahoo'];

							$data['skype'] = $_POST['skype'];

							// $data['taikhoan'] = (int)$_POST['taikhoan'];

							$data['diachi'] = $_POST['khuvuc'];

							$data['tengiaodich'] = $_POST['tengiaodich'];

							$data['ngaythanhlap'] = $_POST['ngaythanhlap'];

							$data['khuvuchd'] = $_POST['khuvuchd'];

							$data['id_loaitin'] = $_POST['linhvuc'];

							$data['id_loaihinh'] = $_POST['loaihinh_tk'];

							$data['fax'] = $_POST['fax'];

							$data['maso'] = $_POST['maso'];

							$data['website'] = $_POST['website'];

							$data['facebook'] = $_POST['facebook'];

							$data['dienthoai'] = $_POST['dienthoai'];
							$data['gioitinh'] = (int)$_POST['gioitinh'];
							$data['noidung'] = $_POST['noidung'];



							$data['ngaysua'] = time();
							$d->setTable('thanhvien');
							$d->setWhere("username",$info_tv["username"]);
							if($d->update($data)){
								$_SESSION['login_web']["email"] = $email;
								transfer(_capnhattc,"http://".$config_url."/tai-khoan");
							}
							else{
								alert("Cập nhật thất bại");
							}
						}
						
					}
					$info_tv = get_info_tv($username);

	}

	
?>