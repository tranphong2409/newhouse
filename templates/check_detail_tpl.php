<div id="sanpham">

    <div class="title_news"><h1><?=$row_detail['ten_'.$lang]?></h1></div><div class="clear"></div>
    <div class="noidung_news">
      <?php if($row_detail['noidung_'.$lang]==''){ ?>
        <div class="updating">Nội dung đang cập nhật.....</div>
      <?php } else echo $row_detail['noidung_'.$lang] ?>
      <div class="clear" style="height:20px;"></div>
      <!-- Go to www.addthis.com/dashboard to customize your tools -->
      <div class="addthis_inline_share_toolbox"></div>
    </div>
    <div class="clear"></div>    

</div>