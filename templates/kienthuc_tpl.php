<div id="sanphamright">

    <div class="thanh_index"><h2><?=$title_detail?></h2></div>
    <div class="clear" style="height:20px;"></div>
    <?php if(count($tintuc)<=0){ ?>
        <div class="updating"><?=_updatingg?></div>
    <?php }else{ ?>
      <div class="ctntin">
        <?php for($i=0;$i<count($tintuc);$i++){ ?>
          <div class="ctn_tin">
            <div class="item_tintuc">
              <div class="img_tintuc">
                <a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>.html" title="<?=$tintuc[$i]['ten_vi']?>"><img src="<?=_upload_baiviet_l?>220x200x1/<?=$tintuc[$i]['photo']?>" alt="<?=$tintuc[$i]['ten_vi']?>" onerror="this.src='upload/hinhanh/220x200x1/noimage.png'" /></a>
              </div>
              <div class="clear" style="height:15px;"></div>
              <div class="info_tintuc">
                <a href="<?=$com?>/<?=$tintuc[$i]['tenkhongdau']?>.html" title="<?=$tintuc[$i]['ten_vi']?>"><?=$tintuc[$i]['ten_vi']?></a>
                <p class="ngaydang"><?=_ngaydang?>:&nbsp;<?=date('m-d-Y',$tintuc[$i]['ngaytao'])?></p>
                <p><?=catchuoi($tintuc[$i]['mota_'.$lang],200)?></p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
    <div class="clear" style="height:10px;"></div>
    <?=$paging?>
<h1 class="visit_hidden fn vcard "><?=$row_setting['ten_'.$lang]?></h1>
</div>