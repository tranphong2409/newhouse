<div class="logo"> <a href="#" target="_blank" onclick="return false;"> <img src="images/logo.png"  alt="" /> </a></div>
<div class="sidebarSep mt0"></div>
<!-- Left navigation -->
<ul id="menu" class="nav">
  <li class="dash" id="menu1"><a class=" active" title="" href="index.php"><span>Trang chủ</span></a></li>

  <li class="product_li <?php if($_GET['type']=='nhaban') echo ' activemenu' ?>" id="menunb"><a href="" title="" class="exp"><span>Nhà đất bán</span><strong></strong></a>
    <ul class="sub">

      <li<?php if($_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=product&act=man&type=nhaban">Quản lý nhà đất bán</a></li>

    </ul>
  </li> 

  <li class="product_li <?php if($_GET['type']=='duan') echo ' activemenu' ?>" id="menuda"><a href="" title="" class="exp"><span>Dự án</span><strong></strong></a>
    <ul class="sub">

      <li<?php if($_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=product&act=man&type=duan">Quản lý dự án</a></li>

    </ul>
  </li> 

  <li class="product_li <?php if($_GET['type']=='chothue') echo ' activemenu' ?>" id="menuct"><a href="" title="" class="exp"><span>Cho thuê</span><strong></strong></a>
    <ul class="sub">

      <li<?php if($_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=product&act=man&type=chothue">Quản lý cho thuê</a></li>

    </ul>
  </li> 
  
  <li class="article_li <?php if($_GET['type']=='tinhthanh'||$_GET['type']=='loaidat'||$_GET['com']=='gia'||$_GET['type']=='giayto'||$_GET['type']=='huong'||$_GET['type']=='phongngu'||$_GET['type']=='dientich') echo ' activemenu' ?>" id="menu_tt"><a href="" title="" class="exp"><span>Tìm kiếm</span><strong></strong></a>
    <ul class="sub">

      <li<?php if($_GET['act']=='man_list') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man_list&type=tinhthanh">Quản lý tỉnh/thành phố</a></li>

      <li<?php if($_GET['act']=='man_cat') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man_cat&type=tinhthanh">Quản lý quận/huyện</a></li>

      <li<?php if($_GET['act']=='man_item') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man_item&type=tinhthanh">Quản lý phường/xã</a></li>

      <li<?php if($_GET['com']=='gia') echo ' class="this"' ?>><a href="index.php?com=gia&act=man">Quản lý khoảng giá</a></li>

      <li<?php if($_GET['type']=='loaidat') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=loaidat">Quản lý loại đất</a></li>

      <li<?php if($_GET['type']=='huong') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=huong">Quản lý hướng</a></li>

      <li<?php if($_GET['type']=='dientich') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=dientich">Quản lý diện tích</a></li>

      <li<?php if($_GET['type']=='phongngu') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=phongngu">Quản lý số phòng ngủ</a></li>

      <li<?php if($_GET['type']=='phongtam') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=phongtam">Quản lý số phòng tắm</a></li>

      <li<?php if($_GET['type']=='giayto') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=giayto">Quản lý giấy tờ pháp lý</a></li>

    </ul>
  </li>

  <li class="article_li <?php if($_GET['type']=='gioithieu'||$_GET['type']=='dichvu'||$_GET['type']=='kienthuc'||$_GET['type']=='taosao'||$_GET['type']=='tintuc'||$_GET['type']=='huongdan'||$_GET['type']=='camket') echo ' activemenu' ?>" id="menu_bv"><a href="" title="" class="exp"><span>Bài viết</span><strong></strong></a>
    <ul class="sub">

      <li<?php if($_GET['type']=='gioithieu') echo ' class="this"' ?>><a href="index.php?com=info&act=capnhat&type=gioithieu">Quản lý giới thiệu</a></li>

      <li<?php if($_GET['type']=='dichvu') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=dichvu">Quản lý dich vụ</a></li>

      <li<?php if($_GET['type']=='kienthuc') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man_list&type=kienthuc">Quản lý danh mục 1 kiến thức</a></li>

      <li<?php if($_GET['type']=='kienthuc') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=kienthuc">Quản lý kiến thức</a></li>

      <li<?php if($_GET['type']=='taisao') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=taisao">Quản lý tại sao chọn bất động sản tuyết tô</a></li>

      <li<?php if($_GET['type']=='tintuc') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=tintuc">Quản lý tin tức</a></li>

      <li<?php if($_GET['type']=='huongdan') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=huongdan">Quản lý hướng dẫn thủ tục</a></li>

      <li<?php if($_GET['type']=='camket') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=camket">Quản lý cam kết với chúng tôi</a></li>

    </ul>
  </li>

  <li class="template_li<?php if($_GET['com']=='setting' || $_GET['com']=='newsletter' || $_GET['com']=='bannerqc'  || $_GET['com']=='company') echo ' activemenu' ?>" id="menu5"><a href="#" title="" class="exp"><span>Thông tin công ty</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='logo') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=logo" title="">Logo</a></li>
      <li<?php if($_GET['type']=='banner') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=banner" title="">Banner</a></li>
      <li<?php if($_GET['type']=='favicon') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=favicon" title="">Favicon</a></li>
      <li<?php if($_GET['type']=='lienhe') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat&type=lienhe" title="">Thông tin liên hệ</a></li>
      <li<?php if($_GET['type']=='footer') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat&type=footer" title="">Thông tin footer</a></li>
      <li<?php if($_GET['com']=='setting') echo ' class="this"' ?>><a href="index.php?com=setting&act=capnhat" title="">Cấu hình chung</a></li>
      <li<?php if($_GET['com']=='newsletter') echo ' class="this"' ?>><a href="index.php?com=newsletter&act=man" title="">Quản lý newsletter</a></li>
       <li<?php if($_GET['com']=='thanhvien') echo ' class="this"' ?>><a href="index.php?com=thanhvien&act=man" title="">Thành viên website</a></li>
    </ul>
  </li>

  <li class="marketing_li<?php if($_GET['com']=='yahoo' || $_GET['com']=='lkweb') echo ' activemenu' ?>" id="menu6"><a href="#" title="" class="exp"><span>Hỗ Trợ Online</span><strong></strong></a>
    <ul class="sub">
      <li <?php if($_GET['com']=='lkweb') echo ' class="this"' ?>><a href="index.php?com=lkweb&act=man&type=lkweb" title="">Share mạng xã hội</a></li>
      <li <?php if($_GET['com']=='lienket') echo ' class="this"' ?>><a href="index.php?com=lkweb&act=man&type=lienket" title="">Liên kết website</a></li>
    </ul>
  </li>

  <li class="gallery_li<?php if($_GET['com']=='photo') echo ' activemenu' ?>" id="menu7"><a href="#" title="" class="exp"><span>Hình ảnh</span><strong></strong></a>
    <ul class="sub">

      <li<?php if($_GET['type']=='slider') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=slider" title="">Hình ảnh slider</a></li>

      <li<?php if($_GET['type']=='imgtrangchu') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=imgtrangchu" title="">Hình ảnh quảng cáo</a></li>
   
    </ul>
  </li>

  <?php /*<li class="setting_li<?php if($_GET['com']=='background') echo ' activemenu' ?>" id="menu8"><a href="#" title="" class="exp"><span>Background website</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['com']=='background' && $_GET['type']=='bgweb') echo ' class="this"' ?>><a href="index.php?com=background&act=capnhat&type=bgweb">Background website</a></li>
    </ul>
  </li>
  <li class="video_li<?php if($_GET['com']=='video') echo ' activemenu' ?>" id="menu_v"><a href="#" title="" class="exp"><span>Video</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['com']=='video') echo ' class="this"' ?>><a href="index.php?com=video&act=man&type=video" title="">Video</a></li>
    </ul>
  </li>*/ ?>

</ul>