<?php /*?> <div id="topheader">
<div class="container">
<div class="content_container">
  
  <p>Hotline: <span><?=$row_setting['hotline']?></span></p>

</div>
</div>
</div> <?php */?>
<div class="clear"></div>
<div class="container">
<div class="content_container">
  <div class="clearfix">
  <div id="logo">
    <a href="trang-chu" title="<?=_trangchu?>"><img src="<?=_upload_hinhanh_l?><?=$logo_top['photo_'.$lang]?>" alt="<?=_trangchu?>"></a>
  </div>
  
  <div id="banner">
    <a href="trang-chu" title="<?=_trangchu?>"><img src="<?=_upload_hinhanh_l?><?=$banner['photo_'.$lang]?>" alt="<?=_trangchu?>"></a>
  </div>
  </div>
   <?php if($_SESSION['login_web']['id']!="") { ?>
  <div class="btn-group userne">
      <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i> Chào <?=catchuoi($_SESSION['login_web']['hoten'],10)?> !</a>
      <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
      </a>
      <ul class="dropdown-menu">
        
        <li><a href="tai-khoan"><i class="fa fa-user fa-fw"></i> Thông tin tài khoản</a></li>
        <li><a href="trang-ca-nhan"><i class="fa fa-newspaper-o fa-fw"></i> Quản lý tin đăng</a></li>
        <li><a href="trang-ca-nhan"><i class="fa fa-pencil-square-o fa-fw"></i> Đăng tin</a></li>
        <li class="divider"></li>
         <li><a href="dang-xuat"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a></li>
      </ul>
    </div>
   <?php } ?>
  <div class="widget-member">
  
    <ul>
    <?php if($_SESSION['login_web']['email']=="") { ?>
    	<li><a href="dang-ky" class="dangkyd">Đăng ký</a></li>
    	<li><a href="dang-nhap" class="dangnhapd">Đăng nhập</a></li>
    <?php }else{ ?>
    <?php /*?> <li><a href="trang-ca-nhan"><i class="fa fa-user" aria-hidden="true"></i> Chào <?=catchuoi($_SESSION['login_web']['hoten'],10)?> !</a></li>
    <li><a href="dang-xuat"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a></li> <?php */?>
    
    <?php } ?>
    	<li><a href="trang-ca-nhan" class="dangtind">Đăng tin miễn phí</a></li>
    </ul>
  </div>
    <div id="main_menu"><?php include _template."layout/menu.php"; ?></div>
</div> 
</div>