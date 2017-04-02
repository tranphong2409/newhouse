<?php
	$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$d = new database($config['database']);
	
	$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
	if ($page <= 0) $page = 1;
	
	$d->reset();
	$sql_setting = "select * from #_setting limit 0,1";
	$d->query($sql_setting);
	$row_setting= $d->fetch_array();

	$d->reset();
	$sql_setting = "select * from #_bgweb where type='bgweb' limit 0,1";
	$d->query($sql_setting);
	$row_background= $d->fetch_array();

	$d->reset();
    $sql = "select thumb_$lang from #_photo where type='favicon'";
    $d->query($sql);
    $favicon = $d->fetch_array();
	
	switch($com){

		/*some load ajax*/
		case 'dang-nhap-nhanh':
			echo '<meta charset="UTF-8">';
			$source = "dkdn/load/load_dangnhap";
			$title_cat = $lang_arr["dangnhap"];
			break;
		case 'dang-ky-nhanh':
			echo '<meta charset="UTF-8">';
			$title_cat = $lang_arr["dangky"];
			$source = "dkdn/load/load_dangky";
			break;
		case 'quy-dinh-mua-hang':
			echo '<meta charset="UTF-8">';
			$title_cat = $lang_arr["quydinhmuahang"];
			$source = "dkdn/load/load_quydinhmuahang";
			break;
		case 'dieu-khoan-dang-ky':
			echo '<meta charset="UTF-8">';
			$source = "dkdn/load/load_info";
			break;
		/*some load ajax*/
		/*tai khoan*/
		case 'dang-ky':
			$source = "dkdn/dangky";
			$template = "dkdn/dangky";
			$title_cat = $lang_arr["dangky"];
			$title = $title_cat." | ".$title;
			break;
		case 'dang-nhap':
			$source = "dkdn/dangnhap";
			$template = "dkdn/dangnhap";
			$title_cat = $lang_arr["dangnhap"];
			$title = $title_cat." | ".$title;
			break;
		case 'quen-mat-khau':
			$source = "dkdn/quenmatkhau";
			$template = "dkdn/quenmatkhau";
			$title_cat = $lang_arr["quenmatkhau"];
			$title = $title_cat." | ".$title;
			break;
		case 'lay-lai-mat-khau':
			$source = "dkdn/laylaimatkhau";
			$template = "dkdn/laylaimatkhau";
			$title_cat = $lang_arr["laylaimatkhau"];
			$title = $title_cat." | ".$title;
			break;		
		case 'doi-mat-khau':
			$source = "doimatkhau";
			$template = "doimatkhau";
			$title_cat = $lang_arr["doimatkhau"];
			$title = $title_cat." | ".$title;
			break;
		case 'tai-khoan':
			$source = "taikhoan";
			$template = "taikhoan";
			$title_cat = $lang_arr["taikhoan"];
			$title = $title_cat." | ".$title;
			break;
    case 'trang-ca-nhan':
			$source = "member";			
            break; 
            
            
             case 'dang-tin-bds':
			$source = "dangtin1";
			$template = "dangtin1";			
            break;
		case 'kich-hoat-mail':
			$source = "dkdn/kichhoatmail";
			break;
		case 'dang-xuat':
			$source = "dkdn/dangxuat";
			break;
		/*tai khoan*/



		case 'video':
			$source = "video";
			$template = isset($_GET['id']) ? "video_detail" : "video";
			break;
			
		case 'ban-do':
			$source = "map";
			$template ="map";
			break;
		case 'download':
			$source = "download";
			$template = isset($_GET['id']) ? "download_detail" : "download";
			$type_bar = 'download';
			$title_detail = "Download";
			break;
		case 'thu-vien-anh':
			$source = "album";
			$template = isset($_GET['id']) ? "album_detail" : "album";
			$type_bar = 'album';
			$title_detail = _albumanh;
			break;
		case 'site-map':
			$source = "sitemap";
			$template ="sitemap";
			break;
		case 'dang-nhap':
			$source = "login";
			$template ="login";
			break;
		case 'tags':
			$source = "tags";
			$template ="tags";
			break;
		
		case 'hoi-dap':
			$source = "hoidap";
			$template ="hoidap";
			break;
		case 'xuat-khau':
			$source = "about";
			$template = "about";
			$title_detail = _xuatkhau;
			$type_bar = 'xuatkhau';
			break;
		
		case 'kiem-tra-don-hang':
			$source = "donhang";
			$template = "donhang";
			$title_detail = "Kiểm tra đơn hàng";
			$type_bar = 'chamsoc';
			break;

		case 'nhan-giam-gia':
			$source = "about";
			$template = "about";
			$title_detail = _nhangiamgia;
			$type_bar = 'giamgia';
			break;

		// case 'hinh-anh':
		// 	$source = "gallery";
		// 	$template = "gallery_detail";			
		// 	break;
		case 'he-thong':
			$source = "news";
			$template = "hethong";
			$title_detail = _hethongcuahang;
			$type_bar = 'hethong';
			break;	
		case 'gioi-thieu':
			$source = "about";
			$template = "about";
			$type_bar = 'gioithieu';
			$title_detail = _gioithieu;
			break;
		case 'tin-tuc':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'tintuc';
			$title_detail = _tintuc;
			break;
		case 'dich-vu':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'dichvu';
			$title_detail = "Dịch vụ";
			break;
		case 'nha-dat-ban':
			$source = "check";
			$template = isset($_GET['id']) ? "product_detail" : "product";
			$type_bar = 'nhaban';
			$title_detail = "Nhà đất bán";
			break;
		case 'du-an-dat':
			$source = "check";
			$template = isset($_GET['id']) ? "product_detail" : "product";
			$type_bar = 'duan';
			$title_detail = "Dự án";
			break;
		case 'cho-thue':
			$source = "check";
			$template = isset($_GET['id']) ? "product_detail" : "product";
			$type_bar = 'chothue';
			$title_detail = "Cho thuê";
			break;
		case 'booking':
			$source = "booking";
			$template =isset($_GET['id']) ? "booking_detail" : "booking";
			$title_detail = _booking;
			$type_bar = 'booking';	
			break;	
			
		case 'lien-he':
			$source = "contact";
			$template = "contact";
			break;

		case 'giao-hang-toan-quoc':
			$source = "giaohang";
			$template = "giaohang";
			break;

		case 'giao-hang-nhan-tien':
			$source = "giaohangnt";
			$template = "giaohangnt";
			break;

		case 'doi-tra-hang-trong-10-ngay':
			$source = "doitra";
			$template = "doitra";
			break;

		case 'huong-dan-mua-hang':
			$source = "huongdanmuahang";
			$template = "huongdanmuahang";
			break;
		
		case 'tim-kiem':
			$source = "search";
			$template = "search";
			break;
		case 'tim-kiem-nha-dat':
			$source = "tknd";
			$template = "tknd";
			break;
		case 'gio-hang':
			$source = "giohang";
			$template = "giohang";
			break;	
		case 'thanh-toan':
			$source = "thanhtoan";
			$template = "thanhtoan";
			break;
		case 'xac-nhan':
			$source = "xacnhan";
			$template = "xacnhan";
			break;		
		case 'trang-chu':
			$source = "index";
			$template = "index";
			break;
		case '':
			$source = "index";
			$template = "index";
			break;
		default: 
			$source = "check";
			$template = isset($_GET['id']) ? "check_detail" : "check";
			break;
	}
	
	if($source!="") include _source.$source.".php";
	
	if($_REQUEST['com']=='logout')
	{
	session_unregister($login_name);
	header("Location:index.php");
	}		
?>