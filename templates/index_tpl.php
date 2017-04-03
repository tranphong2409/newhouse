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
<?php
$num_el = 3;
$num_pro_page = 0;
$num_fea_page = 0;

?>
<div id="sanpham">
    <!--begin:  nha dat mới nhất -->
    <div class="content_khung">

      <div class="thanh_index"><h2>BẤT ĐỘNG SẢN MỚI NHẤT</h2></div><div class="clear" style="height:10px;"></div>
      <div>
        <?php if(count($product)>0){ ?>
        <div class="flex-sp">
          <?php
          $total_pro =  count($product);
          $num_pro_page = ($total_pro%$num_el) ? (int)($total_pro/$num_el) + 1 :  (int)($total_pro/$num_el);
          for($i=0;$i<count($product);$i++){
              if($i % $num_el ==0){
                  echo '<div class="product-item" id="product-'.(($i/$num_el)+1).'">';
              }
          ?>

            <div class="item_sp">
              <div class="clear" style="height:8px;"></div>
              <div class="img_sp">
                <a href="nha-dat-ban/<?=$product[$i]['tenkhongdau']?>" title="<?=$product[$i]['ten_'.$lang]?>"><img src="<?=_upload_product_l?>197x178x1/<?=$product[$i]['thumb']?>" alt="<?=$product[$i]['ten_'.$lang]?>" onerror="this.src='upload/hinhanh/117x106x1/noimage.png'" /></a>
              </div>
              <div class="info_sp">
                <h4><a href="nha-dat-ban/<?=$product[$i]['tenkhongdau']?>" title="<?=$product[$i]['ten_'.$lang]?>"><?=$product[$i]['ten_'.$lang]?></a></h4>
              <?php if($product[$i]['description']) {
                      $des = '';
                      $des = implode(' ', array_slice(explode(' ', $sentence), 0, 15));
                      if($des){
                          echo '<div class="sp_des">'.$des.'<a href="nha-dat-ban/'.$product[$i]['tenkhongdau'].'title="'.$product[$i]['ten_'.$lang].'"><< xem chi tiết >></a>'.'</div>';
                      }
                  }
              ?>
                  <div class="attr">
                <p class="g sp_attr"><?php if($product[$i]['giaban']!=0) echo giaca($product[$i]['giaban']); else echo "Liên hệ"; ?></p>
                <?php if(get_loaidat_i($product[$i]['id_loaidat'])) {  echo '<p class="ld sp_attr">'. get_loaidat_i($product[$i]['id_loaidat']) . '</p>'; } ?>
                <?php if($product[$i]['dientich']) {  echo '<p class="dt sp_attr">'. $product[$i]['dientich'] . '</p>'; } ?>
                <?php if(get_phongngu($product[$i]['sophong'])) {  echo '<p class="pn sp_attr">'. get_phongngu($product[$i]['sophong']) . '</p>'; } ?>
                <?php if(get_huong($product[$i]['id_huong'])) {  echo '<p class="hd sp_attr">'. get_huong($product[$i]['id_huong']) . '</p>'; } ?>
                <?php if(get_giayto($product[$i]['id_phaply'])) {  echo '<p class="gt sp_attr">'. get_giayto($product[$i]['id_phaply']) . '</p>'; } ?>

                  <?php
                    $dc ='';
                    if($product[$i]['id_quanhuyen']!=0) {
                        $dc =  get_quanhuyen($product[$i]['id_quanhuyen']).', ';
                    }
                    if($product[$i]['id_tinhthanh']!=0){
                        $dc .= get_tinhthanh('tinh',$product[$i]['id_tinhthanh']);
                    }
                    if($dc){
                        echo '<p class="dc sp_attr">'.$dc.'</p>';
                    }
                  ?>
                      </div>

              </div>
            </div>

          <?php
              if($i % $num_el == $num_el -1 || $i == $total_pro - 1 ){
                  echo '</div>';
              }
          }
          ?>
        </div>
            <ul id="pagination-product" class="pagination-sm"></ul>
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
        <?php if(count($noibat)>0){ ?>
        <div class="flex-sp">
          <?php
          $total_fea =  count($noibat);
          $num_fea_page = ($total_fea%$num_el) ? (int)($total_fea/$num_el) + 1 : (int)($total_fea/$num_el);
            for($i=0;$i<$total_fea;$i++){
                if($i % $num_el ==0){
                    echo '<div class="feature-item" id="feature-'.(($i/$num_el)+1).'">';
                }
          ?>

            <div class="item_sp" >
              <div class="clear" style="height:8px;"></div>
              <div class="img_sp">
                <a href="nha-dat-ban/<?=$noibat[$i]['tenkhongdau']?>" title="<?=$noibat[$i]['ten_'.$lang]?>"><img src="<?=_upload_product_l?>197x178x1/<?=$noibat[$i]['thumb']?>" alt="<?=$noibat[$i]['ten_'.$lang]?>" onerror="this.src='upload/hinhanh/117x106x1/noimage.png'" /></a>
              </div>
                <div class="info_sp">
                    <h4><a href="nha-dat-ban/<?=$noibat[$i]['tenkhongdau']?>" title="<?=$noibat[$i]['ten_'.$lang]?>"><?=$noibat[$i]['ten_'.$lang]?></a></h4>
                    <?php if($noibat[$i]['description']) {
                        $des = '';
                        $des = implode(' ', array_slice(explode(' ', $noibat[$i]['description']), 0, 15));
                        if($des){
                            echo '<div class="sp_des">'.$des.' <a href="nha-dat-ban/'.$noibat[$i]['tenkhongdau'].'title="'.$noibat[$i]['ten_'.$lang].'"><< xem chi tiết >></a>'.'</div>';
                        }
                    }
                    ?>
                    <div class="attr">
                    <p class="g sp_attr"><?php if($noibat[$i]['giaban']!=0) echo giaca($noibat[$i]['giaban']); else echo "Liên hệ"; ?></p>
                    <?php if(get_loaidat_i($noibat[$i]['id_loaidat'])) {  echo '<p class="ld sp_attr">'. get_loaidat_i($noibat[$i]['id_loaidat']) . '</p>'; } ?>
                    <?php if($noibat[$i]['dientich']) {  echo '<p class="dt sp_attr">'. $noibat[$i]['dientich'] . '</p>'; } ?>
                    <?php if(get_phongngu($noibat[$i]['sophong'])) {  echo '<p class="pn sp_attr">'. get_phongngu($noibat[$i]['sophong']) . '</p>'; } ?>
                    <?php if(get_huong($noibat[$i]['id_huong'])) {  echo '<p class="hd sp_attr">'. get_huong($noibat[$i]['id_huong']) . '</p>'; } ?>
                    <?php if(get_giayto($noibat[$i]['id_phaply'])) {  echo '<p class="gt sp_attr">'. get_giayto($noibat[$i]['id_phaply']) . '</p>'; } ?>

                    <?php
                    $dc ='';
                    if($noibat[$i]['id_quanhuyen']!=0) {
                        $dc =  get_quanhuyen($noibat[$i]['id_quanhuyen']).', ';
                    }
                    if($noibat[$i]['id_tinhthanh']!=0){
                        $dc .= get_tinhthanh('tinh',$noibat[$i]['id_tinhthanh']);
                    }
                    if($dc){
                        echo '<p class="dc sp_attr">'.$dc.'</p>';
                    }
                    ?>
                    </div>
                </div>
            </div>
          <?php
                if($i % $num_el == $num_el -1 || $i == $total_fea - 1 ){
                    echo '</div>';
                }
            }
          ?>

        </div>
            <ul id="pagination-feature" class="pagination-sm"></ul>
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
<script>
    $(function(){
        $('#pagination-product').twbsPagination({
            totalPages: <?php echo $num_pro_page; ?>,
            first: 'Đầu',
            prev: 'Trước',
            next: 'Kế tiếp',
            last: 'Cuối',
            onPageClick: function (event, page) {
               $('.product-item').hide();
               $('#product-'+page).show();
            }
        });
        $('#pagination-feature').twbsPagination({
            totalPages: <?php echo $num_fea_page; ?>,
            first: 'Đầu',
            prev: 'Trước',
            next: 'Kế tiếp',
            last: 'Cuối',
            onPageClick: function (event, page) {
                $('.feature-item').hide();
                $('#feature-'+page).show();
            }
        });
    })
</script>