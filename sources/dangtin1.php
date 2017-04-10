<?php if(!defined('_source')) die("Error");
define ( _width_thumb , 197 );
define ( _height_thumb , 178 );
define ( _style_thumb , 1 );
define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );

		$title_bar .= "Đăng tin";
$loaihinh=$_GET['id'];
			if($_SESSION['login_web']["email"] == "")
			{
				transfer("Bạn chưa đăng nhập","http://".$config_url."/dang-nhap",false);
			}

			if($_SESSION['login_web']["success"] != true)
			{
				transfer("Bạn cần cập nhật lại thông tin","http://".$config_url."/tai-khoan",false);
			}
							
				if(!empty($_POST))
				{

                $file_name=images_name($_FILES['file']['name']);
                if($photo = upload_image("file", 'jpg|png|gif|PNG|GIF|JPG|JPEG|jpeg', _upload_product1,$file_name)){
                    $data['photo'] = $photo;
                    $data['thumb'] = create_thumb($data['photo'], _width_thumb, _height_thumb, _upload_product1,$file_name,_style_thumb);
                }
				$data['id_thanhvien']=$_SESSION['login_web']['id'];
				$data['id_tinhthanh'] = $_POST['tinh'];
					$data['id_quanhuyen'] = $_POST['huyen'];
					$data['id_phuongxa'] = $_POST['xa'];
					// $data['id_duong'] = $_POST['duong'];
					$data['diachi_vi'] = $_POST['diachi'];
          
          $data['id_loaidat'] = $_POST['id_loaidat'];
          $data['dientich'] = $_POST['dientich'];

					$data['sotang'] = $_POST['sotang'];
          $data['giaban'] = str_replace(',','',$_POST['gia']);
					$data['id_phaply'] = $_POST['id_phaply'];
          $data['id_dientich'] = $_POST['id_dientich'];
          $data['sophong'] = $_POST['sophong'];
          $data['phongtam'] = $_POST['phongtam'];
          $data['id_huong'] = $_POST['id_huong'];
          
          
          
					$data['type'] =$loaihinh;
					$data['thichhop_vi'] = $_POST['thichhop_vi'];
					$data['csvc_vi'] = $_POST['csvc_vi'];
					$data['moitruong_vi'] = $_POST['moitruong_vi'];
					$data['khuyenmai_vi'] = $_POST['khuyenmai_vi'];
					$data['khuyenmai_en'] = $_POST['khuyenmai_en'];
					$data['thongtin_vi'] = $_POST['thongtin_vi'];
					$data['thongtin_en'] = $_POST['thongtin_en'];
					$data['baohanh_vi'] = $_POST['baohanh_vi'];
					$data['thongso_vi'] = $_POST['thongso_vi'];
					$data['baohanh_en'] = $_POST['baohanh_en'];


					
					
					

					if($_POST['Latitude']!=0 and $_POST['Longitude']!=0){
					$toado=$_POST['Latitude'].','.$_POST['Longitude'];
					$data['toado'] = $toado;



					}else{
						$data['toado'] = magic_quote($_POST['toado']);
					}

					$data['noidung_vi'] = magic_quote($_POST['noidung']);
					$data['ten_vi'] = $_POST['tieude'];
					
					$data['tenkhongdau']=changeTitle($_POST['tieude']);
			


				$data['ngaytao'] = time();


				$d->setTable('product');
				if($d->insert($data))
				{
					$id = mysql_insert_id();

						if(isset($_FILES['files'])) {
				            for($i=0;$i<count($_FILES['files']['name']);$i++){
				            	if($_FILES['files']['name'][$i]!=''){

									$file['name'] = $_FILES['files']['name'][$i];
									$file['type'] = $_FILES['files']['type'][$i];
									$file['tmp_name'] = $_FILES['files']['tmp_name'][$i];
									$file['error'] = $_FILES['files']['error'][$i];
									$file['size'] = $_FILES['files']['size'][$i];
								    $file_name1 = images_name($_FILES['files']['name'][$i]);
									$photo = upload_photos($file, 'jpg|png|gif|PNG|GIF|JPG|JPEG|jpeg', _upload_product_l,$file_name1);
									$data1['photo'] = $photo;
									$data1['thumb'] = create_thumb($data1['photo'], 354, 266, _upload_product_l,$file_name1,1);
									$data1['stt'] = (int)$_POST['stthinh'][$i];
									$data1['hienthi'] = 1;
									$data1['id_product'] = $id;
									$d->setTable('product_photo');
									$d->insert($data1);

								}
							}
				        }

					transfer("Đăng tin thành công","http://".$config_url."/trang-ca-nhan");
				}
				
					
				else
				{

					transfer("Có lỗi xảy ra khi đăng tin");
				}
		
			}

	
  
?>