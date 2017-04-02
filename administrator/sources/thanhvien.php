<?php	if(!defined('_source')) die("Error");
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";



switch($act){
	case "man":
		get_mails();
		$template = "thanhvien/items";
		break;
	case "add":

		$template = "thanhvien/item_add";
		break;
	
	case "edit":
		get_mail();
		$template = "thanhvien/item_add";
		break;	
		
	case "send":
		send();
		break;
	
	case "save":
		save_mail();
		break;	
	
	case "delete":
		delete();
		break;	

		
	default:
		$template = "index";
}

function get_mails(){
	global $d, $items,$paging,$page;

	$per_page = 10; // Set how many records do you want to display per page.
	$startpoint = ($page * $per_page) - $per_page;
	$limit = ' limit '.$startpoint.','.$per_page;
	
	$where = "  #_thanhvien  where email!='' ";

	
	if($_REQUEST['view']!='')
	{
		$view=$_REQUEST['view'];
		$where.=" and view=0";
		$link_add .= "&view=0";
	}

	if($_REQUEST['loai']!='')
	{
		$loai=$_REQUEST['loai'];
		$where.=" and taikhoan='".$loai."'";
		$link_add .= "&loai=".$_GET['loai'];
	}

	$where .=" order by id desc";

	 $sql = "select * from $where $limit";
	$d->query($sql);
	$items = $d->result_array();

	$url = "index.php?com=thanhvien&act=man".$link_add;
	$paging = pagination($where,$per_page,$page,$url);	
}

function get_mail(){
	global $d, $item;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=thanhvien&act=man");
	
	$sql = "select * from #_thanhvien where id='".$id."'";
	$d->query($sql);

	$sqlUPDATE_ORDER = "UPDATE table_thanhvien SET view =1 WHERE  id = ".$id."";
	$resultUPDATE_ORDER = mysql_query($sqlUPDATE_ORDER) or die("Not query sqlUPDATE_ORDER");


	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=thanhvien&act=man");
	$item = $d->fetch_array();
}

function save_mail(){
	global $d;
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=thanhvien&act=man");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";

	
	if($id){
		$sql="select username,password,email from #_thanhvien where id=".$id;
		$d->query($sql);
		$row = $d->fetch_array();
		//
		$sql="select username from #_thanhvien where (username='".$_POST["username"]."' or email='".$_POST["email"]."' ) and id<>$id ";
		$d->query($sql);
		$row = $d->fetch_array();
		if($row!=null)	transfer("Tên Đăng Nhập Hoặc Email Đã Được Đăng Ký", "index.php?com=thanhvien&act=man&page=".$_REQUEST['page']);


		$file_name=images_name($_FILES['file']['name']);

		if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_baiviet,$file_name)){
			$data['photo'] = $photo;		
			$data['thumb'] = create_thumb($data['photo'], 80, 80, _upload_baiviet,$file_name,1);

		}	

	

		$data['hoten'] = $_POST['hoten'];
		$data['trangthai'] = isset($_POST['trangthai']) ? 1 : 0;
		$data['email'] = $_POST['email'];
		$data['username'] = $_POST['username'];
		if($_POST['password']!=''){
			$data['password'] = md5($_POST['password']);	
		}
		$data['diachi'] = $_POST['diachi'];
		$data['ngaysinh'] = $_POST['ngaysinh'];
		$data['dienthoai'] = $_POST['dienthoai'];
		$data['noidung'] = $_POST['noidung'];

		$data['tengiaodich'] = $_POST['tengiaodich'];

		$data['ngaythanhlap'] = $_POST['ngaythanhlap'];

		$data['khuvuchd'] = $_POST['khuvuchd'];

		$data['id_loaitin'] = $_POST['linhvuc'];

		$data['id_loaihinh'] = $_POST['loaihinh_tk'];

		$data['fax'] = $_POST['fax'];

		$data['maso'] = $_POST['maso'];

		$data['website'] = $_POST['website'];

		$data['facebook'] = $_POST['facebook'];

		$data['mota'] = $_POST['mota'];



		$data['gioitinh'] = $_POST['gioitinh'];

		$data['bidanh'] = $_POST['bidanh'];

		$data['yahoo'] = $_POST['yahoo'];

		$data['skype'] = $_POST['skype'];

		$data['taikhoan'] = $_POST['taikhoan'];

		$data['ngaysua'] = time();



		$d->setTable('thanhvien');

		
		$d->setWhere('id',$id);

		if($d->update($data))

				redirect("index.php?com=thanhvien&act=man&page=".$_REQUEST['page']);
		else
			transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=thanhvien&act=man");
	}else{
		$sql="select username from #_thanhvien where username='".$_POST["username"]."' or email='".$_POST["email"]."' ";
		$d->query($sql);
		$row = $d->fetch_array();
		if($row!=null)	transfer("Tên Đăng Nhập Hoặc Email Đã Được Đăng Ký", "index.php?com=thanhvien&act=man");
		if ($_POST["password"]!=$_POST["repassword"]) {
			transfer("Nhập lại mật khẩu", "index.php?com=thanhvien&act=man");
		}

		$file_name=images_name($_FILES['file']['name']);

			if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG', _upload_baiviet,$file_name)){
			$data['photo'] = $photo;		
			$data['thumb'] = create_thumb($data['photo'], 80, 80, _upload_baiviet,$file_name,1);
		}	

		$data['hoten'] = $_POST['hoten'];
		$data['email'] = $_POST['email'];
		$data['username'] = $_POST['username'];
		$data['password'] = md5($_POST['password']);
		$data['diachi'] = $_POST['diachi'];
		
		$data['ngaysinh'] = $_POST['ngaysinh'];
		$data['dienthoai'] = $_POST['dienthoai'];
		$data['noidung'] = $_POST['noidung'];

		$data['gioitinh'] = $_POST['gioitinh'];

		$data['bidanh'] = $_POST['bidanh'];

		$data['yahoo'] = $_POST['yahoo'];

		$data['skype'] = $_POST['skype'];

		$data['tengiaodich'] = $_POST['tengiaodich'];

		$data['ngaythanhlap'] = $_POST['ngaythanhlap'];

		$data['khuvuchd'] = $_POST['khuvuchd'];

		$data['id_loaitin'] = $_POST['linhvuc'];

		$data['id_loaihinh'] = $_POST['loaihinh_tk'];

		$data['fax'] = $_POST['fax'];

		$data['maso'] = $_POST['maso'];

		$data['website'] = $_POST['website'];

		$data['facebook'] = $_POST['facebook'];

		$data['taikhoan'] = (int)$_POST['taikhoan'];

		$data['stt'] = (int)$_POST['stt'];
		$data['trangthai'] = isset($_POST['trangthai']) ? 1 : 0;
		$data['ngaytao'] = time();


		
		$d->setTable('thanhvien');
		if($d->insert($data))
			redirect("index.php?com=thanhvien&act=man&page=".$_REQUEST['page']);
		else
			transfer("Lưu dữ liệu bị lỗi", "index.php?com=thanhvien&act=man");
	}
}


function delete(){
	global $d;
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$sql = "delete from #_thanhvien where id='".$id."'";
		$d->query($sql);

		$d->reset();
	
		$sql = "delete from #_contact1 where id_thanhvien='".$id."'";
		$d->query($sql);


		if($d->query($sql))
			redirect("index.php?com=thanhvien&act=man");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=thanhvien&act=man");
	}else if (isset($_GET['listid'])==true){
		$listid = explode(",",$_GET['listid']); 
		for ($i=0 ; $i<count($listid) ; $i++){
			$idTin=$listid[$i]; 
			$id =  themdau($idTin);		
			$sql = "delete from #_thanhvien where id='".$id."'";
			$d->query($sql);

			$d->reset();
	
			$sql = "delete from #_contact1 where id_thanhvien='".$id."'";
			$d->query($sql);

			if($d->query($sql)){
				transfer("Xóa dữ liệu bị lỗi", "index.php?com=thanhvien&act=man&page=".$_REQUEST['page']);
			
			}
		}
		redirect("index.php?com=thanhvien&act=man&page=".$_REQUEST['page']);
	} transfer("Không nhận được dữ liệu", "index.php?com=thanhvien&act=man");
	
		
}


function send(){
	global $d,$config_ip,$config_email,$config_pass;
	$file_name= images_name($_FILES['file']['name']);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=thanhvien&act=man");
	
	if($file = upload_image("file", 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF', _upload_hinhanh,$file_name)){
		$data['file'] = $file;
	}
	$d->setTable('setting');
	$d->select();
	$company_mail = $d->fetch_array();
	
	if(isset($_POST['listid'])){
		include_once "../libraries/phpMailer/class.phpmailer.php";	
		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587; // or 587
	    $mail->Username = "chodatnen.vn@gmail.com";
	    $mail->Password = "@chodatnen";
	    $mail->Priority    = 1;

		
		//Thông tin người gửi
		$mail->SetFrom('chodatnen.vn@gmail.com',$_POST['ten_vi']);

		$listid = explode(",",$_POST['listid']); 
		for ($i=0 ; $i<count($listid) ; $i++){
			$idTin=$listid[$i]; 
			$id =  themdau($idTin);		
			$d->reset();
			$sql = "select email from #_thanhvien where id='".$id."'";
			$d->query($sql);
			if($d->num_rows()>0){
			while($row = $d->fetch_array()){
			$mail->AddAddress($row['email'], $company_mail['ten_vi']);
			}
			}
		}
		/*=====================================
		 * THIET LAP NOI DUNG EMAIL
 		*=====================================*/

		//Thiết lập tiêu đề
		$mail->Subject    = '['.$_POST['ten_vi'].']';
		$mail->IsHTML(true);
		//Thiết lập định dạng font chữ
		$mail->CharSet = "utf-8";	
		$body = $_POST['noidung_vi'];
		
		$mail->Body = $body;
		if($data['file']){
			$mail->AddAttachment(_upload_hinhanh.$data['file']);
		}
		if($mail->Send())
		transfer("Thông tin đã được gửi đi.", "index.php?com=thanhvien&act=man");
		else
		transfer("Hệ thống bị lỗi, xin thử lại sau.", "index.php?com=thanhvien&act=man");
	
	}
	
}

?>