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
<script type="text/javascript">
  $(document).ready(function() {

      $('.reblog').click(function(e) {
        var pid = $(this).data('rel');
        var soluong = 1;
        

        $.ajax({
          type: "POST",
          url: "ajax/add_giohang.php", 
          data: {pid:pid,soluong:soluong},
          success: function(string){
            var getData = $.parseJSON(string);   
            var result = getData.result_giohang;
            var count = getData.count;

            if(result > 0) {   
              $('.giohang_top span').html(count);  
              alert('Bạn đã thêm thành công sản phẩm này vào giỏ hàng');
              //window.location.href="thanh-toan.html";        
            }
            else if (result == -1)alert('Sản phẩm này không tồn tại');
            else if (result == 0)
              { alert('Sản phẩm này đã có trong giỏ hàng'); 
                //window.location.href="thanh-toan.html";      
          }
          }          
        });
      });

  });
</script>

    <div id="sanpham">
        <div class="thanh_index"> <h2><?=_timkiem?></h2></div><div class="clear" style="height:20px;"></div>

        <div class="khung">
        <p style="font-size:16px;">Tìm được <?=count($product)?> kết quả phù hợp với từ khóa '<?=$_GET['keywords']?>'</p>
        <div class="clear" style="height:20px;"></div>
        <div>

            <?php if(count($product)!=0){?>
        <div class="flex-sp">
      <?php for($i=0;$i<count($product);$i++){ ?>
        <div class="item_sp">
          <h4><a href="bds/<?=$product[$i]['tenkhongdau']?>.html" title="<?=$product[$i]['ten_'.$lang]?>"><?=$product[$i]['ten_'.$lang]?></a></h4>
          <div class="clear" style="height:8px;"></div>
          <div class="img_sp">
            <a href="bds/<?=$product[$i]['tenkhongdau']?>.html" title="<?=$product[$i]['ten_'.$lang]?>"><img src="<?=_upload_product_l?>120x100x1/<?=$product[$i]['thumb']?>" alt="<?=$product[$i]['ten_'.$lang]?>" onerror="this.src='upload/hinhanh/120x100x1/noimage.png'" /></a>
          </div>
          <div class="info_sp">
            <p>
              Địa chỉ:&nbsp;
              <?=$product[$i]['diachi_vi']?>
              <?php if($product[$i]['diachi_vi']!='') echo ', '; ?>
              <?php if($product[$i]['id_duongpho']!=0) echo get_duongpho($product[$i]['id_duongpho']).', '; ?>
              <?php if($product[$i]['id_phuongxa']!=0) echo get_phuongxa($product[$i]['id_phuongxa']).', '; ?>
              <?php if($product[$i]['id_quanhuyen']!=0) echo get_quanhuyen($product[$i]['id_quanhuyen']).', '; ?>
              <?php if($product[$i]['id_tinhthanh']!=0) echo get_tinhthanh($product[$i]['id_tinhthanh']); ?>
            </p>
            <p>Diện tích:&nbsp;<span><?php if($product[$i]['dientich']!='') echo $product[$i]['dientich']; else echo '---'; ?></span></p>
            <p>Giá:&nbsp;<span><?php if($product[$i]['giaban']!=0) echo giaca($product[$i]['giaban']); else echo 'Liên hệ'; ?></span></p>
            <p>Hướng:&nbsp;<?php if($product[$i]['huong']!='') echo $product[$i]['huong'];else echo '---'; ?></p>
          </div>
        </div>
      <?php } ?>
    </div>

    <div class="clear"></div>
    <div class="paging"><?=$paging?></div>
    <?php } else { ?>
    <div class="updating">Không tìm thấy sản phẩm nào phù hợp...</div>
    <?php }?>

          </div>

        </div>
        <div class="paging"><?=$paging['paging']?></div> 
    </div>