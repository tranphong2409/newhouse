<?php
	session_start();
  error_reporting(0);
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './libraries/');

	//$_SESSION['lang']='vi';
	
	if(!isset($_SESSION['lang']))
	{
		$_SESSION['lang']='vi';
	}
		$lang=$_SESSION['lang'];
	
	include_once _lib."config.php";
 
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_share.php";
	include_once _lib."class.database.php";
	include_once _source."lang_$lang.php";
	include_once _lib."functions_nhadat.php";
	//include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
	include_once _lib."counter.php"; 
	include_once _source."custom.php"; 
	
	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
	$pid=$_REQUEST['productid'];
	$soluong=1;
	addtocart($pid,$soluong);
	redirect("thanh-toan.html");}
	
	if($_GET['lang']!=''){
		$_SESSION['lang']=$_GET['lang'];
		header("location:".$_SESSION['links']);
	} else {
		$_SESSION['links']=getCurrentPageURL();
	}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<base href="http://<?=$config_url?>/">
<link id="favicon" rel="shortcut icon" href="<?=_upload_hinhanh_l.$favicon['thumb_'.$lang]?>" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php if($title_bar!='') echo $title_bar; else echo $row_setting['title']; ?></title>
<meta name="description" content="<?php if($description_bar!='') echo $description_bar; else echo $row_setting['description']; ?>">
<meta name="keywords" content="<?php if($keywords_bar!='') echo $keywords_bar; else echo $row_setting['keywords']; ?>">

<meta name="robots" content="noodp,index,follow" />
<meta name="google" content="notranslate" />
<meta name='revisit-after' content='1 days' />
<meta name="ICBM" content="<?=$row_setting['toado']?>">
<meta name="geo.position" content="<?=$row_setting['toado']?>">
<meta name="geo.placename" content="<?=$row_setting['diachi_'.$lang]?>">
<meta name="author" content="<?=$row_setting['ten_'.$lang]?>">

<?=$share_facebook?>
<script language="javascript" type="text/javascript" src="js/jquery-1.10.2.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css" />
<?php /*?> <script language="javascript" type="text/javascript" src="js/jquery-1.9.1.js"></script> <?php */?>	
<script type="text/javascript" language="javascript" src="js/bootstrap/js/bootstrap.min.js"></script>
<link href="js/bootstrap/css/bootstrap.css" rel="stylesheet" />
<script type="text/javascript" src="js/jssor/jssor.js"></script>
<script type="text/javascript" src="js/jssor/jssor.slider.js"></script>
<link rel="stylesheet" type="text/css" href="js/slidedownmenu/slidedownmenu.css" />

<script type="text/javascript" src="js/owl_carousel/owl.carousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="js/owl_carousel/assets/owl.carousel.css" />

<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.lockfixed.min.js"></script>
<script>
	$(document).ready(function() {
		var left_h=$('.frm_spright').height();
		var main_h=$('.frm_spleft').height();
		var footer_h = $('#footer').height();
		if(main_h>left_h) 
		{
			$.lockfixed("#scroll-left",{offset: {top: 95, bottom: footer_h+100}});
		} 
			
	});
</script>

<style type="text/css">
	body{
		font-family: Arial;
		font-size:14px;
		line-height:1.5;
		background:#fff url(<?=_upload_hinhanh_l.$row_background['photo']?>) <?=$row_background['re_peat']?> <?=$row_background['tren']?> <?=$row_background['trai']?>;
		background-color:<?=$row_background['mauneen']?>;
		background-attachment:<?=$row_background['fix_bg']?>;
		width:100%;
		height: 100%;
		float: left;
		text-rendering: optimizeLegibility !important;
		-webkit-font-smoothing: antialiased !important;
	}
</style>

<link type="text/css" rel="stylesheet" href="menu/src/css/jquery.mmenu.all.css" />
<script type="text/javascript" src="menu/src/js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript">
	$(function() {
		$('nav#menu').mmenu();
	});
</script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyD5Mevy_rl8U4ZyBB8i5jmdxfvb9Cg5UoE&sensor=false"></script>
</head>

<body <?php if($_GET['com']=='he-thong'){?>onload="initialize();<?php } ?>">
<?=$row_setting['analytics']?>
<div id="container" lang="vi">

	<?php include _template."layout/main_menu.php"; ?>

	<header id="header">
        <?php include _template."layout/header.php"; ?>
    </header>
    <div class="clear" style="height:25px;"></div>
	<?php if($_GET['com']==''||$_GET['com']=='index'||$_GET['com']=='trang-chu'){ ?>
	    <div id="slide_show">
	    	<?php include _template."layout/slider.php";?>
		</div>
	<?php } ?>
	<div class="clear" style="height:30px;"></div>
    <main id="main">
		<section id="content" >
			<div class="container">
				<div class="content_container">
          <?php if($com=='dang-ky' || $com=='dang-nhap' || $source=='member' || $source=='dangtin1' || $source=='taikhoan' || $source=='doimatkhau'){ ?>
           <?php 
            
            // echo "com = $com - source = $source - template = $template";
            // echo '<pre>'; print_r( $_GET ); echo '</pre>';
            include _template.$template."_tpl.php";?>
          
          <?php }else{ ?>
            <?php if(in_array($_GET['com'], $arr_ktlisst)){ ?>
              <style type="text/css">
                #sanpham{float: right;}
              </style>
              <?php include _template."layout/dieuhuong_detail.php"; ?>
              <div class="clear" style="height:10px;"></div>
              <?php include _template."layout/right.php"; ?>
            <?php } ?>
            <?php 
            
            // echo "com = $com - source = $source - template = $template";
            // echo '<pre>'; print_r( $_GET ); echo '</pre>';
            include _template.$template."_tpl.php";?>
            <?php if(!in_array($_GET['com'], $arr_ktlisst)){ ?>
              <?php include _template."layout/left.php"; ?>
            <?php } ?>
          <?php } ?>
				</div>
			</div>
		</section>
		<div class="clear" style="height:20px;"></div>
		<section id="content1">
			<?php include _template."layout/bottom.php"; ?>
		</section>
    </main>
   	<footer id="footer">
		<?php include _template."layout/footer.php"; ?>
    </footer>
</div>
<?=$row_setting['vchat']?>
<div class="cnt_top_b hid">
  <div id="footer1" style="">
    <table style="" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td><a class="link_title blink_me" href="tel:<?=$row_setting['hotline']?>"><img src="images/goidien.png"> <?=_goidien?></a></td>

          <td height="50"><a class="link_title" href="sms:<?=$row_setting['hotline']?>"><img src="images/tuvan.png"> SMS</a></td> 

          <td><a class="link_title" href="lien-he.html"><img src="images/chiduong.png">&nbsp;<?=_chiduong?></a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="menu_hidden"><a href="#menu"><img src="images/icon/menu.png" alt="Menu"></a></div>
 <link rel="stylesheet" href="css/jquery-ui.css">

  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery.twbsPagination.js"></script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5804787881f1116b"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=581852618668424";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
