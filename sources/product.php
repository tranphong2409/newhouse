<?php  if(!defined('_source')) die("Error");

		@$idc =  addslashes($_GET['idc']);
		@$idl =  addslashes($_GET['idl']);
		@$idi =  addslashes($_GET['idi']);
		@$ids =  addslashes($_GET['ids']);
		@$id=  addslashes($_GET['id']);
		#các sản phẩm khác======================

		echo $id;

		if($id!=''){

			$d->reset();
			$sql = " select * from #_product where tenkhongdau='".$id."' ";
			$d->query($sql);
			$row_detail = $d->fetch_array();

			

		}else{

			$per_page = 10; // Set how many records do you want to display per page.
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