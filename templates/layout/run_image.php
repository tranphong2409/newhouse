<?php
  $d->reset();
	$sql_muaban = "select tenkhongdau,ten_$lang,id,thumb from #_product where hienthi=1 and type = 'product' and noibat!=0 order by stt asc ";
	$d->query($sql_muaban);
	$row_noibat = $d->result_array();
?>
<script src="js/ImageScroller.js" language="javascript"></script>
<div id="ctsdiv" style="text-align:center; position:relative; max-height:380px;height:auto; overflow:hidden">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" id="ctstbl" style="position:relative; margin:0px">
    <?php for($i=0,$count_ha=count($row_noibat);$i<$count_ha;$i++){?>
      <tr>
        <td valign="top">
          <div class="sp_noibat">
            <a href="san-pham/<?=$row_noibat[$i]['tenkhongdau']?>.html" title="<?=$row_noibat[$i]['ten_'.$lang]?>">
              <img src="<?=_upload_product_l?>240x180x1/<?=$row_noibat[$i]['thumb']?>" alt="<?=$row_noibat[$i]['ten_'.$lang]?>" onerror="this.src='upload/hinhanh/240x180x1/noimage.png'"/>
              <h3><?=$row_noibat[$i]['ten_'.$lang]?></h3>
            </a>
          </div>
          <div class="clear" style="height:20px;"></div>
        </td>
      </tr>
    <?php }?>
  </table>
</div>
<script type="text/javascript">createScroller("myScroller", "ctsdiv", "ctstbl",0,60,1,0,1);</script>