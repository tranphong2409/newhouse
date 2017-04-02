<?php  if(!defined('_source')) die("Error");

		@$id =  addslashes($_GET['id']);
		@$flag = 0;
		#các sản phẩm khác======================

		$d->reset();
		$sql = " select tenkhongdau from #_product where hienthi=1 ";
		$d->query($sql);
		$row_all = $d->result_array();

		for($i=0;$i<count($row_all);$i++){
			if($row_all[$i]['tenkhongdau']==$id) $flag = 1;
		}
		if($id!=''){

			$d->reset();
			$sql = " select * from #_product where hienthi=1 and tenkhongdau='".$id."' ";
			$d->query($sql);
			$row_detail = $d->fetch_array();

			$d->reset();
			$sql = " select * from #_product_photo where hienthi=1 and id_product='".$row_detail['id']."' ";
			$d->query($sql);
			$hinhanh = $d->result_array();

			if($row_detail['id']==''){
				if(!in_array($id, $row_all)){

					$d->reset();
					$sql = " select id,tenkhongdau from #_baiviet_cat where hienthi=1 and tenkhongdau='".$id."' ";
					$d->query($sql);
					$row_detail_baiviet_list = $d->fetch_array();

					$d->reset();
					$sql = " select id,tenkhongdau from #_baiviet where hienthi=1 and tenkhongdau='".$id."' ";
					$d->query($sql);
					$row_detail_baiviet = $d->fetch_array();

					$d->reset();
					$sql = " select * from #_gia where hienthi=1 and tenkhongdau='".$id."' ";
					$d->query($sql);
					$row_detail_gia = $d->fetch_array();

					if($row_detail_gia['id']!=''){
						$per_page = 12; // Set how many records do you want to display per page.
						$startpoint = ($page * $per_page) - $per_page;
						$limit = ' limit '.$startpoint.','.$per_page;
						
						$where = " #_product where hienthi=1 and type='".$type_bar."' and giaban>=".$row_detail_gia['giatu']." and giaban<=".$row_detail_gia['giaden']." ";
						$where .= $where_tk;
						$where .= " order by stt,ngaytao desc ";

						$sql = "select id,tenkhongdau,ten_$lang,thumb,id_loaidat,id_tinhthanh,id_quanhuyen,giaban,sophong,id_huong,id_phaply,dientich from $where $limit";
						$d->query($sql);
						$product = $d->result_array();
					}

					if($row_detail_baiviet['id']!=''){
						$per_page = 12; // Set how many records do you want to display per page.
						$startpoint = ($page * $per_page) - $per_page;
						$limit = ' limit '.$startpoint.','.$per_page;
						
						$where = " #_product where hienthi=1 and type='".$type_bar."' and id_loaidat='".$row_detail_baiviet['id']."' ";
						$where .= $where_tk;
						$where .= " order by stt,ngaytao desc ";

						$sql = "select id,tenkhongdau,ten_$lang,thumb,id_loaidat,id_tinhthanh,id_quanhuyen,giaban,sophong,id_huong,id_phaply,dientich from $where $limit";
						$d->query($sql);
						$product = $d->result_array();
					}

					if($row_detail_baiviet_list['id']!=''){
						$per_page = 12; // Set how many records do you want to display per page.
						$startpoint = ($page * $per_page) - $per_page;
						$limit = ' limit '.$startpoint.','.$per_page;
						
						$where = " #_product where hienthi=1 and type='".$type_bar."' and id_quanhuyen='".$row_detail_baiviet_list['id']."' ";
						$where .= $where_tk;
						$where .= " order by stt,ngaytao desc ";

						$sql = "select id,tenkhongdau,ten_$lang,thumb,id_loaidat,id_tinhthanh,id_quanhuyen,giaban,sophong,id_huong,id_phaply,dientich from $where $limit";
						$d->query($sql);
						$product = $d->result_array();

					}
				}

				$url = getCurrentPageURL();
				$paging = pagination($where,$per_page,$page,$url);

				$d->reset();
				$sql = " select * from #_baiviet where hienthi=1 and tenkhongdau='".$id."' ";
				$d->query($sql);
				$row_detail = $d->fetch_array();

				$d->reset();
				$sql = " select * from #_baiviet_list where hienthi=1 and id='".$row_detail['id_list']."' ";
				$d->query($sql);
				$row_detail_list = $d->fetch_array();

				$title_detail = $row_detail_list['ten_'.$lang];

				if($row_detail['id']!=''){

					$d->reset();
					$sql = " select * from #_baiviet where hienthi=1 and id_list='".$row_detail['id']."' ";
					$d->query($sql);
					$tintuc = $d->result_array();
				}
			}

		}else {

			$per_page = 12; // Set how many records do you want to display per page.
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;
			
			$where = " #_product where hienthi=1 and type='".$type_bar."' ";
			$where .= $where_tk;
			$where .= " order by stt,ngaytao desc ";

			$sql = "select id,tenkhongdau,ten_$lang,thumb,id_loaidat,id_tinhthanh,id_quanhuyen,giaban,sophong,id_huong,id_phaply,dientich from $where $limit";
			$d->query($sql);
			$product = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);

			$d->reset();
			$sql = " select * from #_baiviet_list where hienthi=1 and tenkhongdau='".$com."' ";
			$d->query($sql);
			$row_detail_list = $d->fetch_array();

			$d->reset();
			$sql = " select * from #_baiviet where hienthi=1 and id_list='".$row_detail_list['id']."' ";
			$d->query($sql);
			$tintuc = $d->result_array();

		}
		
		if(!empty($_POST)&&isset($_POST['dangky'])){

		$data['email'] = $_POST['email'];
		$data['tieude'] = $_POST['tieude'];
		$data['ten'] = $_POST['ten'];
		$data['noidung'] = $_POST['noidung'];
		$data['sanpham'] = $_POST['sanpham'];
		$data['ngaytao'] = time();
		$d->setTable('nhanmail');
		if($d->insert($data))
			transfer("Bạn đã đăng ký thành công<br/>Cảm ơn", "san-pham.html");
		else
			transfer("Lưu dữ liệu bị lỗi", "san-pham.html");
		}
		
			
?>