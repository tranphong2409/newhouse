<?php
	$type = (isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";	
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$act = explode('_',$act);
	if(count($act>1)){
		$act = $act[1];
	} else {
		$act = $act[0];
	}
	switch($type){
		//-------------Bất động sản------------------
		case 'nhaban':
			$title_main = "Nhà đất bán";
			$config_images = "true";
			$config_mota= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";

			$config_km = "false";
			$config_tags = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 400 );
			@define ( _height_thumb , 540 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'duan':
			$title_main = "Dự án";
			$config_images = "true";
			$config_mota= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";

			$config_km = "false";
			$config_tags = "false";
			$config_noibat = "false";
			@define ( _width_thumb , 400 );
			@define ( _height_thumb , 540 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'chothue':
			$title_main = "Cho thuê";
			$config_images = "true";
			$config_mota= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";

			$config_km = "false";
			$config_tags = "false";
			$config_noibat = "false";
			@define ( _width_thumb , 400 );
			@define ( _height_thumb , 540 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		//...............Trang tĩnh................//
		case 'gioithieu':
			$title_main = "Giới thiệu";
			$config_images = "false";
			$config_img = "false";
			$config_mota= "false";
			$config_ten = 'true';
			@define ( _width_thumb , 555 );
			@define ( _height_thumb , 350 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		//................Bài viết................//
		case 'dichvu':
			$title_main = "Dịch vụ";
			$config_ten = 'true';
			$config_images = "false";
			$config_mota= "false";
			$config_noibat = "true";
			$config_seo = "true";
			$config_noidung= "true";
			
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			@define ( _width_thumb , 220 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			break;
		case 'kienthuc':
			$title_main = "Kiến thức";
			$config_ten = 'true';
			$config_images = "true";
			$config_mota= "true";
			$config_noibat = "true";
			$config_seo = "true";
			$config_noidung= "true";

			$config_list = "true";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			@define ( _width_thumb , 220 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			break;
		case 'taisao':
			$title_main = "Tại sao chọn Tuyết Tô";
			$config_ten = 'true';
			$config_images = "true";
			$config_mota= "false";
			$config_noibat = "false";
			$config_seo = "true";
			$config_noidung= "true";

			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			@define ( _width_thumb , 140 );
			@define ( _height_thumb , 280 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'tintuc':
			$title_main = "Tin tức";
			$config_ten = 'true';
			$config_images = "true";
			$config_mota= "true";
			$config_noibat = "true";
			$config_seo = "true";
			$config_noidung= "true";

			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			@define ( _width_thumb , 220 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			break;
		case 'huongdan':
			$title_main = "Hướng dẫn thủ tục";
			$config_ten = 'true';
			$config_images = "false";
			$config_mota= "false";
			$config_noibat = "false";
			$config_seo = "true";
			$config_noidung= "true";

			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			@define ( _width_thumb , 220 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			break;
		case 'camket':
			$title_main = "Cam kết với chúng tôi";
			$config_ten = 'true';
			$config_images = "false";
			$config_mota= "false";
			$config_noibat = "false";
			$config_seo = "true";
			$config_noidung= "true";

			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			@define ( _width_thumb , 220 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			break;
		///...........Tìm kiếm............///
		case 'tinhthanh':
			$title_main = "Tỉnh thành";
			$config_ten = 'true';
			$config_images = "false";
			$config_mota= "false";
			$config_noibat = "false";
			$config_seo = "false";
			$config_noidung= "false";
			
			$config_list = "true";
			$config_cat = "true";
			$config_item = "true";
			$config_sub = "false";
			@define ( _width_thumb , 220 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			break;
		case 'loaidat':
			$title_main = "Loại đất";
			$config_ten = 'true';
			$config_images = "false";
			$config_mota= "false";
			$config_noidung= "false";
			@define ( _width_thumb , 220 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			break;
		case 'huong':
			$title_main = "Hướng";
			$config_ten = 'true';
			$config_images = "false";
			$config_mota= "false";
			$config_noidung= "false";
			@define ( _width_thumb , 220 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			break;
		case 'dientich':
			$title_main = "Diện tích";
			$config_ten = 'true';
			$config_images = "false";
			$config_mota= "false";
			$config_noidung= "false";
			@define ( _width_thumb , 220 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			break;
		case 'phongngu':
			$title_main = "Số phòng ngủ";
			$config_ten = 'true';
			$config_images = "false";
			$config_mota= "false";
			$config_noidung= "false";
			@define ( _width_thumb , 220 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			break;
		case 'phongtam':
			$title_main = "Số phòng tắm";
			$config_ten = 'true';
			$config_images = "false";
			$config_mota= "false";
			$config_noidung= "false";
			@define ( _width_thumb , 220 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			break;
		case 'giayto':
			$title_main = "Giấy tờ pháp lý";
			$config_ten = 'true';
			$config_images = "false";
			$config_mota= "false";
			$config_noidung= "false";
			@define ( _width_thumb , 220 );
			@define ( _height_thumb , 200 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			break;
		//-------------info------------------
		case 'tags':
			$title_main = 'tags';
			$config_ten = 'true';
			break;
		case 'lienhe':
			$title_main = 'Liên hệ';
			$config_ten = 'true';
			break;
		case 'video':
			$title_main = 'Video';
			@define ( _width_thumb , 790 );
			@define ( _height_thumb , 320 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF|swf' );
			$ratio_ = 1;
			break;

		case 'banner':
			$title_main = 'Banner';
			@define ( _width_thumb , 608 );
			@define ( _height_thumb , 205 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF|swf' );
			$ratio_ = 1;
			break;

		case 'logo':
			$title_main = 'Logo';
			@define ( _width_thumb , 250 );
			@define ( _height_thumb , 100 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'popup':
			$title_main = 'Popup';
			$links_ = 'true';
			$config_hienthi = 'true';
			@define ( _width_thumb , 900 );
			@define ( _height_thumb , 500 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'favicon':
			$title_main = 'Favicon';
			@define ( _width_thumb , 40 );
			@define ( _height_thumb , 40 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'bgweb':
			$title_main = 'background web';
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 700 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		//-------------photo------------------
		case 'slider':
			$title_main = "Hình ảnh slider";
			@define ( _width_thumb , 640 );
			@define ( _height_thumb , 385 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			$config_noidung = "true";
			break;
		case 'imgtrangchu':
			$title_main = "Hình ảnh quảng cáo";
			@define ( _width_thumb , 270 );
			@define ( _height_thumb , 300 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 2;
			$links_ = "true";
			$config_noidung = "false";
			break;
		//.......................Liên kết website.......................//
		case 'lkweb':
		    $title_main = "Share mạng xã hội";
		    $config_images = "true";
			@define ( _width_thumb , 38 );
			@define ( _height_thumb , 40 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'lienket':
		    $title_main = "Liên kết website";
		    $config_images = "true";
			@define ( _width_thumb , 30 );
			@define ( _height_thumb , 33 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		//--------------defaut---------------
		default: 
			$source = "";
			$template = "index";
			break;
	}

?>