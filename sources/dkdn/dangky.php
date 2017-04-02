<?php if(!defined('_source')) die("Error");

		$d->reset();
      $sql = "select noidung_$lang from #_company where type='footer' ";
      $d->query($sql);
      $footer = $d->fetch_array();
	
	include_once 'dkdn_custom/function_dkdn.php';
	
	$url_here = getCurrentPageURL();
	$title= $title_cat = _dangkythanhvien;
	if(!empty($_POST)) {
		$error = true;
		$error2 = true;
		//Kiểm tra các trường không được rỗng
		if(str_notnull(str_security($_POST["captcha"]),_captcha)) 
			if(str_notnull($username = str_security($_POST["username"]),_tendn)) 
				if(str_notnull($password = str_security($_POST["password"]),_matkhau)) 
					if(str_notnull($email = str_security($_POST["email"]),"Email"))
						if(str_notnull($hoten = str_security($_POST["hoten"]),_hoten))
							$error = true;
						else $error = false;
					else $error = false;
				else $error = false;
			else $error = false;
		else $error = false;
		#===========================================================
		//Kiểm tra tồn tại...
		if($error){
			//các trường đã đủ
			if($_SESSION["captcha"]==$_POST["captcha"])
				if(check_username($username)) 
					if(check_email($email)) 
						if($password == $_POST["re_password"])
							$error2 = true;
						else{
							//nhập lại mk sai
							$error2 = false;
							alert(_nhaplaimatkhau._sai);
						}
					else{ 
						//email đã tồn tại
						$error2 = false;
						alert("Email đã được đăng ký");
					} 
				else { 
					//username đã tồn tại
					$error2 = false; 
					alert("Tên đăng nhập đã tồn tại");
				}
			else{
				//sai captcha
				$error2 = false; 
				alert(_captcha." "._sai);
			}	

			if(!empty($_POST['file']))
			{
				$error2 = false; 
				alert("Bạn chưa nhập hình đại diện.");
			}	
		}
		#===========================================================
		//Không Có Lỗi
		if($error && $error2){
			$_SESSION["captcha"] ='';
			//data save

			$file_name=images_name($_FILES['file']['name']);

				if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_baiviet_l,$file_name)){
				$data['photo'] = $photo;		
				$data['thumb'] = create_thumb($data['photo'], 108, 108, _upload_baiviet_l,$file_name,1);
			}	

			$data['keycode'] = $maso = ChuoiNgauNhien(20);
			$data['username'] = $username;
			$data['password'] = md5($password);
			$data['email'] = $email;
			$data['hoten'] = $hoten;

			$data['bidanh'] = $_POST['bidanh'];

			$data['ngaysinh'] = $_POST['ngaysinh'];


			$data['id_tinh'] = $_POST['tinh'];

			$data['id_huyen'] = $_POST['huyen'];

			$data['id_xa'] = $_POST['xa'];



			$data['diachi'] = $_POST['khuvuc'];
			$data['dienthoai'] = $_POST['dienthoai'];

			$data['gioitinh'] = $_POST['gioitinh'];

			$data['dienthoaiban'] = $_POST['dienthoaiban'];

			$data['yahoo'] = $_POST['yahoo'];

			$data['skype'] = $_POST['skype'];

			$data['taikhoan'] = $_POST['taikhoan'];

			$data['noidung'] =  $_POST['noidung'];
			$data['trangthai'] = 0;
			$data['ngaytao'] = time();
			$d->setTable('thanhvien');
			#=====================================================send Mail
			include_once _lib."phpMailer/class.phpmailer.php";
			
		

			$mail = new PHPMailer();
		$mail->IsSMTP(); // Gọi đến class xử lý SMTP
		$mail->Host       = $config_ip; // tên SMTP server
		$mail->SMTPAuth   = true;                  // Sử dụng đăng nhập vào account
		$mail->Username   = $config_email; // SMTP account username
		$mail->Password   = $config_pass;   

			
			//Thông tin người gửi
			$mail->SetFrom($config_email,$row_setting['ten_vi']);
			//Thiết lập thông tin người nhận
			$mail->AddAddress($email,$hoten);
			//Thiết lập email Reply
			$mail->AddReplyTo($row_setting['email'],$row_setting['ten_vi']);
			//Thiết lập tiêu đề
			$mail->Subject    = "Xác Nhận Tài Khoản từ website ".$row_setting["ten_vi"]."  -  ".$row_setting["website"];
			$mail->IsHTML(true);
			//Thiết lập định dạng font chữ
			$mail->CharSet = "utf-8";	
			$body = '<table style="text-align:left;">';
			$body .= '
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2">Chào bạn <span style="font-weight:bold">'.$_POST['hoten'].'</span>.</td>
				</tr>
				<tr>
					<td colspan="2">Cảm ơn bạn đã đăng ký làm thành viên của <a href="http://'.$config_url.'">'.$config_url.'</a> </td>
				</tr>
				<td colspan="2">
				<p style="color:black;">Để kích hoạt tài khoản, bạn vui lòng kích vào đường dẫn dưới đây (hoặc sao chép và dán vào thanh địa chỉ

					của trình duyệt):

						<a href="http://'.$config_url.'/kich-hoat-mail/'.$maso.'/'.$_POST['username'].'.html">
							http://'.$config_url.'/kich-hoat-mail/'.$maso.'/'.$_POST['username'].'.html
						</a>
				</p> 
				</td>
				<tr>
					<td colspan="2">Thông tin tài khoản của bạn: </td>
				</tr>

				<tr>
					<td colspan="2"><li style="padding-left:20px;">Tên đăng nhập: '.$_POST['username'].'</li></td>
				</tr>

				<tr>
					<td colspan="2">Xin vui lòng liên lạc với chúng tôi nếu Quý khách cần thêm thông tin.</td>
				</tr>

				<tr>
					<td colspan="2">(<span style="color:red;">*</span>) Đây là email tự động. Việc hồi âm cho địa chỉ email này sẽ không được ghi nhận.</td>
				</tr>

				<tr>
					<td colspan="2">Trân trọng,</td>
				</tr>

				<tr>
					<td colspan="2"><p style="font-weight:bold;">Phòng Dịch Vụ Khách Hàng</p></td>
				</tr>
				<tr>
					<td colspan="2"><a href="http://'.$config_url.'">'.$config_url.'</a></td>
				</tr>
				<tr>
					<td colspan="2"><a href="mailto:'.$row_setting['email'].'">'.$row_setting['email'].'</a></td>
				</tr>

				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2">Dear Mr, Ms  <span style="font-weight:bold">'.$_POST['hoten'].'</span>.</td>
				</tr>
				<tr>
					<td colspan="2">Thanks for registering in <a href="http://'.$config_url.'">'.$config_url.'</a> </td>
				</tr>
				<td colspan="2">
				<p style="color:black;">To active your account, please click to below link (or copy and paster to address bar in your browsers):

						<a href="http://'.$config_url.'/kich-hoat-mail/'.$maso.'/'.$_POST['username'].'.html">
							http://'.$config_url.'/kich-hoat-mail/'.$maso.'/'.$_POST['username'].'.html
						</a>
				</p> 
				</td>
				<tr>
					<td colspan="2">Your account information: </td>
				</tr>

				<tr>
					<td colspan="2"><li style="padding-left:20px;">Login name: '.$_POST['username'].'</li></td>
				</tr>

				<tr>
					<td colspan="2">Please feel free to contact us for further information.</td>
				</tr>

				<tr>
					<td colspan="2">(<span style="color:red;">*</span>) This is an automatically generated email, please do not reply.</td>
				</tr>

				<tr>
					<td colspan="2">Sincerely,</td>
				</tr>

				<tr>
					<td colspan="2"><p style="font-weight:bold;">Customer Service Department</p></td>
				</tr>
				<tr>
					<td colspan="2"><a href="http://'.$config_url.'">'.$config_url.'</a></td>
				</tr>
				<tr>
					<td colspan="2"><a href="mailto:'.$row_setting['email'].'">'.$row_setting['email'].'</a></td>
				</tr>

				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>

				<tr>
					<td style="text-align:center;" colspan="2"><p>'.$footer['noidung_vi'].'</p></td>
				</tr>
				';
				$body .= '</table>';

				$mail->Body = $body;

			if($mail->Send()){
				if($d->insert($data))
					transfer("Bạn đã đăng ký thành công <br/> Hãy truy cập email bạn đăng ký để kích hoạt tài khoản", "http://".$config_url."/dang-nhap");
				else
					transfer(_luudatafalse, "http://".$config_url."/dang-ky");
			}
			else
				transfer("Đăng ký thất bại! vui lòng thử lại!", "http://".$config_url."/dang-ky");
			}		
		}	
?>