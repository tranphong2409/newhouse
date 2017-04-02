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
    <div class="thanh_index"><h2>Tag '<?=$title_detail?>'</h2> </div><div class="clear" style="height:20px;"></div>
    <?php if(count($product)<=0){ ?>
        <div class="updating"><?=_updatingg?></div>
    <?php }else{ ?>
      <div class="flex-sp">
        <?php for($i=0;$i<count($product);$i++){ ?>
          <div class="item_sp">
            <div class="img_sp">
              <a href="xay-dung/<?=$product[$i]['tenkhongdau']?>.html" title="<?=$product[$i]['ten_'.$lang]?>"><img src="<?=_upload_product_l?>285x225x1/<?=$product[$i]['thumb']?>" alt="<?=$product[$i]['ten_'.$lang]?>" onerror="this.src='upload/hinhanh/285x225x1/noimage.png'" /></a>
            </div>
            <div class="clear" style="height:13px;"></div>
            <div class="info_sp">
              <h4><a href="xay-dung/<?=$product[$i]['tenkhongdau']?>.html" title="<?=$product[$i]['ten_'.$lang]?>"><?=$product[$i]['ten_'.$lang]?></a></h4>
              <p><?=catchuoi($product[$i]['mota_'.$lang],170)?></p>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="clear"></div>
      <div class="paging"><?=$paging?></div> 
    <?php } ?>

</div>
<h1 class="visit_hidden"><?=$row_setting['ten_'.$lang]?></h1>