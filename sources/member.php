<?php
define ( _width_thumb , 197 );
define ( _height_thumb , 178 );
define ( _style_thumb , 1 );
define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
define ( _upload_product1 , 'upload/product/' );
if(!defined('_source')) die("Error");

		if($_SESSION['login_web']['email']=='')
		{
			transfer("Bạn chưa đăng nhập",'dang-nhap');
		}


		$act=$_GET['act'];

		$id=$_GET['id'];

		switch ($act) {
			case 'edit':

				$template="member_edit";
				edit_member();
				break;

			case 'delete':

				delete_member();
				break;

			case 'delete_all':

				delete_all();
				break;
			
			default:
				$template="member";
				get_member();
				break;
		}


		function get_member()
		{
			global $d,$tintuc;

			 $sql = "select * from #_product where hienthi=1 and id_thanhvien='".$_SESSION['login_web']['id']."' order by id asc ";
			$d->query($sql);

			$tintuc = $d->result_array();

		}

		function edit_member()
		{
			global $d,$dangtin_detail,$id,$ds_photo,$config_url;

			 
			$sql_tintuc = "select * from #_product where id='".$id."' ";
			$d->query($sql_tintuc);
			$dangtin_detail = $d->fetch_array();

			$sql = "select * from #_product_photo where id_product='".$id."' order by stt,id desc ";
			$d->query($sql);
			$ds_photo = $d->result_array();	
		
			if(!empty($_POST))
			{
                $file_name=images_name($_FILES['file']['name']);
                if($photo = upload_image("file", _img_type, _upload_product1,$file_name)){
                    $data['photo'] = $photo;
                    $data['thumb'] = create_thumb($data['photo'], _width_thumb, _height_thumb, _upload_product1,$file_name,_style_thumb);
                }

					// $data['id_thanhvien']=$_SESSION['login_web']['id'];
					
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
          
          
          
					// $data['type'] = $_POST['type'];
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


					// $data['hoten'] = $_POST['hoten'];
					

					// $data['dienthoai'] = $_POST['dienthoai'];

					// $data['diachilienhe'] = $_POST['diachi1'];
				

					$data['ngaysua'] = time();
					$d->setTable('product');
					$d->setWhere('id',$id);
//                    print_r($data);die;
					if($d->update($data))
					{

						if(isset($_FILES['files'])) {
				            for($i=0;$i<count($_FILES['files']['name']);$i++){
				            	if($_FILES['files']['name'][$i]!=''){

									$file['name'] = $_FILES['files']['name'][$i];
									$file['type'] = $_FILES['files']['type'][$i];
									$file['tmp_name'] = $_FILES['files']['tmp_name'][$i];
									$file['error'] = $_FILES['files']['error'][$i];
									$file['size'] = $_FILES['files']['size'][$i];
								    $file_name = images_name($_FILES['files']['name'][$i]);
									$photo = upload_photos($file, 'jpg|png|gif|PNG|GIF|JPG|JPEG|jpeg', _upload_product_l,$file_name);
									$data1['photo'] = $photo;
									$data1['thumb'] = create_thumb($data1['photo'], 354, 266, _upload_product_l,$file_name,1);	
									$data1['stt'] = (int)$_POST['stthinh'][$i];
									$data1['hienthi'] = 1;
									$data1['id_product'] = $id;
									$d->setTable('product_photo');
									$d->insert($data1);
								}
							}
					    }

						transfer("Cập nhật thành công","http://".$config_url."/trang-ca-nhan");
					} else {

						transfer("Có lỗi xảy ra khi cập nhật","http://".$config_url."/trang-ca-nhan");
					}

			}

		}

		function delete_member()
		{
			global $d,$config_url;

			if(isset($_GET['id']))
			{
					$id =  themdau($_GET['id']);

				
					$sql = "delete from #_product where id='".$id."'";
					$d->query($sql);


					if($d->query($sql))
						redirect("http://".$config_url."/trang-ca-nhan");
					else
						transfer("Xóa thành công","http://".$config_url."/trang-ca-nhan" );
			} 
		}
		function delete_all()
		{
			global $d,$config_url;

			if (isset($_GET['id'])==true){

				$listid = explode("-",$_GET['id']); 
				for ($i=0 ; $i<count($listid) ; $i++){
					$idTin=$listid[$i]; 
					$id1 =  themdau($idTin);	

					$d->reset();
					$sql = "select id,photo,thumb from #_product_photo where id_product='".$id1."'";
					$d->query($sql);
					$photo_lq = $d->result_array();
					if(count($photo_lq)>0){
						for($j=0;$j<count($photo_lq);$j++){
							delete_file(_upload_product.$photo_lq[$j]['photo']);
							delete_file(_upload_product.$photo_lq[$j]['thumb']);
						}
					}
					$sql = "delete from #_product_photo where id_product='".$id1."'";
					$d->query($sql);

					$d->reset();
					$sql = "select id from #_product where id='".$id1."'";
					$d->query($sql);
				
						$sql = "delete from #_product where id='".$id1."'";
						$d->query($sql);
					}
				
				redirect("http://".$config_url."/trang-ca-nhan");
			} else {
				transfer("Xóa thành công","http://".$config_url."/trang-ca-nhan" );
			}
		}


		

	
?>