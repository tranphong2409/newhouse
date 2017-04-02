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

  <?php include _template."layout/dieuhuong_detail.php"; ?>
  <?php /*<div class="thanh_index"><h2><?=$title_detail?></h2></div>*/ ?>
  <div class="clear" style="height:10px;"></div>
  <?php if(count($product)<=0){ ?>
    <div class="updating">Không tìm thấy kết quả phù hợp.</div>
  <?php }else{ ?>
    
    <div class="clear"></div>
    <?=$paging?>
    <div class="clear" style="height:10px;"></div>
    <div class="flex-sp">
      <?php for($i=0;$i<count($product);$i++){ ?>
        <div class="item_sp">
          <h4><a href="<?=$comnd?>/<?=$product[$i]['tenkhongdau']?>" title="<?=$product[$i]['ten_'.$lang]?>"><?=$product[$i]['ten_'.$lang]?></a></h4>
          <div class="clear" style="height:8px;"></div>
          <div class="img_sp">
            <a href="<?=$comnd?>/<?=$product[$i]['tenkhongdau']?>" title="<?=$product[$i]['ten_'.$lang]?>"><img src="<?=_upload_product_l?>117x106x1/<?=$product[$i]['thumb']?>" alt="<?=$product[$i]['ten_'.$lang]?>" onerror="this.src='upload/hinhanh/117x106x1/noimage.png'" /></a>
          </div>
          <div class="info_sp">
            <p class="g"><?php if($product[$i]['giaban']!=0) echo giaca($product[$i]['giaban']); else echo "Liên hệ"; ?></p>
            <p class="ld"><?=get_loaidat_i($product[$i]['id_loaidat'])?></p>
            <p class="dt"><?php if($product[$i]['dientich']!='') echo $product[$i]['dientich']; else echo '---';?></p>
            <p class="pn"><?=get_phongngu($product[$i]['sophong'])?></p>
            <p class="hd"><?=get_huong($product[$i]['id_huong'])?></p>
            <p class="gt"><?=get_giayto($product[$i]['id_phaply'])?></p>
            <p class="dc">
              <?php if($product[$i]['id_quanhuyen']!=0) echo get_quanhuyen($product[$i]['id_quanhuyen']).', '; ?>
              <?php if($product[$i]['id_tinhthanh']!=0) echo get_tinhthanh($product[$i]['id_tinhthanh']); ?>
            </p>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="clear" style="height:10px;"></div>
    <?=$paging?>
  <?php } ?>

<div class="clear" style="height:15px;"></div>
</div>

<h1 class="visit_hidden fn vcard"><?=$row_setting['ten_'.$lang]?></h1>