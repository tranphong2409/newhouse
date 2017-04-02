<?php 

  $d->reset();
  $sql =" select id,noidung_$lang,ten_$lang,tenkhongdau,thumb from #_baiviet where hienthi=1 and type='taisao' order by stt asc ";
  $d->query($sql);
  $row_taisao = $d->result_array();

  $d->reset();
  $sqltt =" select id,ten_$lang,tenkhongdau from #_baiviet where hienthi=1 and type='tintuc' and noibat<>0 order by stt asc limit 0,6 ";
  $d->query($sqltt);
  $tintucnb = $d->result_array();

  $d->reset();
  $sqlkt =" select id,id_list,ten_$lang,tenkhongdau from #_baiviet where hienthi=1 and type='kienthuc' and noibat<>0 order by stt asc limit 0,6 ";
  $d->query($sqlkt);
  $kienthucnb = $d->result_array();

  $d->reset();
  $sqldv =" select id,ten_$lang,tenkhongdau from #_baiviet where hienthi=1 and type='dichvu' order by stt asc limit 0,6 ";
  $d->query($sqldv);
  $dichvunb = $d->result_array();

  $d->reset();
  $sqlhd =" select id,ten_$lang,tenkhongdau from #_baiviet where hienthi=1 and type='huongdan' order by stt asc ";
  $d->query($sqlhd);
  $huongdan = $d->result_array();

  $d->reset();
  $sqlck =" select id,ten_$lang,tenkhongdau from #_baiviet where hienthi=1 and type='camket' order by stt asc ";
  $d->query($sqlck);
  $camket = $d->result_array();

?>
<script type="text/javascript">
$(document).ready(function(e) {
  setTimeout(function(){
    $('.owl_hinhanhnb').owlCarousel({
      autoplay:false,
      margin:0,
      responsiveClass:true,
      nav:false,
      loop:true,
      responsive:{
          0:{
              items:2,
          },
          600:{
              items:3,
          },
          1000:{
              items:4,
          }
      }
    });
  }, 1000)
});
</script>
<?php if($_GET['com']==''||$_GET['com']=='index'||$_GET['com']=='trang-chu'){ ?>
<div id="hinhanh" style="display: none">
<div class="container">
<div class="content_container">
  
      <div class="title_habt"><h3>Tại sao bạn chọn mua và bán nhà trên Kiều Lê</h3></div><div class="clear" style="height:20px;"></div>
      <div class="owl_hinhanhnb">
        <?php for($i=0;$i<count($row_taisao);$i++){ ?>
          <div class="item_hanb">
            <div class="img_ihanb">
              <a href="xay-dung/<?=$row_taisao[$i]['tenkhongdau']?>" title="<?=$row_taisao[$i]['ten_'.$lang]?>"><img src="<?=_upload_baiviet_l?>140x280x1/<?=$row_taisao[$i]['thumb']?>" alt="<?=$row_taisao[$i]['ten_'.$lang]?>" onerror="this.src='upload/hinhanh/140x280x1/noimage.png'" />
              </a>
            </div>
            <div class="clear" style="height:14px;"></div>
            <div class="info_hanb">
              <a href="xay-dung/<?=$row_taisao[$i]['tenkhongdau']?>" title="<?=$row_taisao[$i]['ten_'.$lang]?>"><?=$row_taisao[$i]['ten_'.$lang]?></a>
            </div><?//info_hanb?>
          </div>
        <?php } ?>
      </div><?//.owl_hinhanhnb?>
    <div class="clear cls"></div>
    <div class="clear" style="height:6px;"></div>
    
</div>
</div>
</div><?//#hinhanh?>
<?php } ?>

<div id="thongtin">
<div class="container">
<div class="content_container ttbt">
  
  <div class="item_ttbt">
    <div class="box_ttbt">
    <div class="content_ttbt">
      <?php if(count($tintucnb)<=0){ echo 'Nội dung đang cập nhật...'; }else{ ?>
      <?php for($i=0;$i<count($tintucnb);$i++){ ?>
        <a href="tin-tuc/<?=$tintucnb[$i]['tenkhongdau']?>" title="<?=$tintucnb[$i]['ten_'.$lang]?>"><?=$tintucnb[$i]['ten_'.$lang]?></a>
      <?php } } ?>
    </div>
    <div class="title_ttbt">Tin tức mới</div>
    <div class="clear"></div>
    </div>
  </div>

  <div class="item_ttbt">
    <div class="box_ttbt">
    <div class="content_ttbt">
      <?php if(count($kienthucnb)<=0){ echo 'Nội dung đang cập nhật...'; }else{ ?>
      <?php for($i=0;$i<count($kienthucnb);$i++){ 
        $d->reset();
        $sql = " select tenkhongdau from #_baiviet_list where id='".$kienthucnb[$i]['id_list']."' ";
        $d->query($sql);
        $kienthucnb_list = $d->fetch_array();
      ?>
        <a href="<?=$kienthucnb_list['tenkhongdau']?>/<?=$kienthucnb[$i]['tenkhongdau']?>" title="<?=$kienthucnb[$i]['ten_'.$lang]?>"><?=$kienthucnb[$i]['ten_'.$lang]?></a>
      <?php } } ?>
    </div>
    <div class="title_ttbt">Kiến thức</div>
    <div class="clear"></div>
    </div>
  </div>

  <div class="item_ttbt">
    <div class="box_ttbt">
    <div class="content_ttbt">
      <?php if(count($dichvunb)<=0){ echo 'Nội dung đang cập nhật...'; }else{ ?>
      <?php for($i=0;$i<count($dichvunb);$i++){ ?>
        <a href="dich-vu/<?=$dichvunb[$i]['tenkhongdau']?>" title="<?=$dichvunb[$i]['ten_'.$lang]?>"><?=$dichvunb[$i]['ten_'.$lang]?></a>
      <?php } } ?>
    </div>
    <div class="title_ttbt">Dịch vụ</div>
    <div class="clear"></div>
    </div>
  </div>

</div>
</div>
</div><?//#thongtin?>

<div id="danhsach">
<div class="container">
<div class="content_container ds">
  
  <div class="item_ds">
    <div class="box_ds">
      <div class="title_ds">Nhà ở</div><div class="clear"></div>
      <?php for($i=0;$i<4;$i++){ ?>
        <a href="" title="<?=$rs_quan[$i]['ten_'.$lang]?>">Nhà ở <?=$rs_quan[$i]['ten_'.$lang]?></a>
        <div class="clear"></div>
      <?php } ?>
    </div>
  </div>

  <div class="item_ds">
    <div class="box_ds">
      <div class="title_ds">Chung cư</div><div class="clear"></div>
      <?php for($i=0;$i<4;$i++){ ?>
        <a href="" title="<?=$rs_quan[$i]['ten_'.$lang]?>">Chung cư <?=$rs_quan[$i]['ten_'.$lang]?></a>
        <div class="clear"></div>
      <?php } ?>
    </div>
  </div>

  <div class="item_ds">
    <div class="box_ds">
      <div class="title_ds">Hướng dẫn thủ tục</div><div class="clear"></div>
      <?php for($i=0;$i<count($huongdan);$i++){ ?>
        <a href="huong-dan/<?=$huongdan[$i]['tenkhongdau']?>" title="<?=$huongdan[$i]['ten_'.$lang]?>"><?=$huongdan[$i]['ten_'.$lang]?></a>
        <div class="clear"></div>
      <?php } ?>
    </div>
  </div>

  <div class="item_ds">
    <div class="box_ds">
      <div class="title_ds">Cam kết với chúng tôi</div><div class="clear"></div>
      <?php for($i=0;$i<count($camket);$i++){ ?>
        <a href="cam-ket/<?=$camket[$i]['tenkhongdau']?>" title="<?=$camket[$i]['ten_'.$lang]?>"><?=$camket[$i]['ten_'.$lang]?></a>
        <div class="clear"></div>
      <?php } ?>
    </div>
  </div>

</div>
</div>
</div>