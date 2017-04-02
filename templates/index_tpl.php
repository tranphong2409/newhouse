<script language="javascript">
  function addtocart(pid){
    document.form_giohang.productid.value=pid;
    document.form_giohang.command.value='add';
    document.form_giohang.submit();
  }
</script>
<form name="form_giohang" action="index.php" method="post">
  <input type="hidden" name="productid" />
  <input type="hidden" name="command" />
</form>
<div id="sanpham">
    <!--begin:  nha dat mới nhất -->
    <div class="content_khung">

      <div class="thanh_index"><h2>BẤT ĐỘNG SẢN MỚI NHẤT</h2></div><div class="clear" style="height:10px;"></div>
      <div>
        <?php if(count($product)>0){ ?>
        <div class="flex-sp">
          <?php for($i=0;$i<count($product);$i++){ ?>
            <?php if($product[$i]['noibat'] == 0){?>
            <div class="item_sp">
              <h4><a href="nha-dat-ban/<?=$product[$i]['tenkhongdau']?>" title="<?=$product[$i]['ten_'.$lang]?>"><?=$product[$i]['ten_'.$lang]?></a></h4>
              <div class="clear" style="height:8px;"></div>
              <div class="img_sp">
                <a href="nha-dat-ban/<?=$product[$i]['tenkhongdau']?>" title="<?=$product[$i]['ten_'.$lang]?>"><img src="<?=_upload_product_l?>260x235x1/<?=$product[$i]['thumb']?>" alt="<?=$product[$i]['ten_'.$lang]?>" onerror="this.src='upload/hinhanh/117x106x1/noimage.png'" /></a>
              </div>
              <div class="info_sp">
                <p class="g"><?php if($product[$i]['giaban']!=0) echo giaca($product[$i]['giaban']); else echo "Liên hệ"; ?></p>
                <p class="ld"><?=get_loaidat_i($product[$i]['id_loaidat'])?></p>
                <p class="dt"><?=$product[$i]['dientich']?></p>
                <p class="pn"><?=get_phongngu($product[$i]['sophong'])?></p>
                <p class="hd"><?=get_huong($product[$i]['id_huong'])?></p>
                <p class="gt"><?=get_giayto($product[$i]['id_phaply'])?></p>
                <p class="dc">
                  <?php if($product[$i]['id_quanhuyen']!=0)  echo get_quanhuyen($product[$i]['id_quanhuyen']).', '; ?>
                  <?php if($product[$i]['id_tinhthanh']!=0){ $mytinh=get_tinhthanh('tinh',$product[$i]['id_tinhthanh']); echo $mytinh["ten"]; } ?>
                </p>
              </div>
            </div>
            <?php } ?>
          <?php } ?>
        </div>
        <div class="clear"></div>
        
        <?php }else{ ?>
          <div class="updating"><?=_updatingg?></div>
        <?php } ?>
      </div>
      <div class="clear" style="height:20px;"></div>

    <div class="clear"></div>
    </div>
    <!--end:  nha dat mới nhất -->


    <!--begin:  nha dat noi bat -->
    <div class="content_khung">

      <div class="thanh_index"><h2>BẤT ĐỘNG SẢN NỔI BẬT</h2></div><div class="clear" style="height:10px;"></div>
      <div>
        <?php if(count($product)>0){ ?>
        <div class="flex-sp">
          <?php for($i=0;$i<count($product);$i++){ ?>
            <?php if($product[$i]['noibat'] == 1){?>
            <div class="item_sp" >
              <h4><a href="nha-dat-ban/<?=$product[$i]['tenkhongdau']?>" title="<?=$product[$i]['ten_'.$lang]?>"><?=$product[$i]['ten_'.$lang]?></a></h4>
              <div class="clear" style="height:8px;"></div>
              <div class="img_sp">
                <a href="nha-dat-ban/<?=$product[$i]['tenkhongdau']?>" title="<?=$product[$i]['ten_'.$lang]?>"><img src="<?=_upload_product_l?>260x235x1/<?=$product[$i]['thumb']?>" alt="<?=$product[$i]['ten_'.$lang]?>" onerror="this.src='upload/hinhanh/117x106x1/noimage.png'" /></a>
              </div>
              <div class="info_sp">
                <p class="g"><?php if($product[$i]['giaban']!=0) echo giaca($product[$i]['giaban']); else echo "Liên hệ"; ?></p>
                <p class="ld"><?=get_loaidat_i($product[$i]['id_loaidat'])?></p>
                <p class="dt"><?=$product[$i]['dientich']?></p>
                <p class="pn"><?=get_phongngu($product[$i]['sophong'])?></p>
                <p class="hd"><?=get_huong($product[$i]['id_huong'])?></p>
                <p class="gt"><?=get_giayto($product[$i]['id_phaply'])?></p>
                <p class="dc">
                  <?php if($product[$i]['id_quanhuyen']!=0)  echo get_quanhuyen($product[$i]['id_quanhuyen']).', '; ?>
                  <?php if($product[$i]['id_tinhthanh']!=0){ $mytinh=get_tinhthanh('tinh',$product[$i]['id_tinhthanh']); echo $mytinh["ten"]; } ?>
                </p>
              </div>
            </div>
            <?php } ?>
          <?php } ?>
        </div>
        <div class="clear"></div>
       
        <?php }else{ ?>
          <div class="updating"><?=_updatingg?></div>
        <?php } ?>
      </div>
      <div class="clear" style="height:20px;"></div>

    <div class="clear"></div>
    </div>
    <!--end:  nha dat noi bat -->
</div>
<h1 class="visit_hidden vcard fn"><?=$row_setting['ten_'.$lang]?></h1>