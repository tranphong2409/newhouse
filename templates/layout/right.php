<div id="right" style="margin-top:10px;">
  <div class="title_right">Kiến thức</div><div class="clear"></div>
  <div class="danhmuc">
    <ul>
      <?php for($i=0;$i<count($kt_list);$i++){ ?>
        <li><a href="<?=$kt_list[$i]['tenkhongdau']?>" title="<?=$kt_list[$i]['ten_'.$lang]?>"><?=$kt_list[$i]['ten_'.$lang]?></a></li>
      <?php } ?>
    </ul>
  </div>
</div>