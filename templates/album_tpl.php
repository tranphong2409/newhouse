<div id="sanpham">

    <div class="title_tt wow fadeInRight " data-wow-delay='0.7s'><h2><?=$title_detail?></h2></div>
    <div class="clear" style="height:20px;"></div>
    <?php if(count($album)<=0){ ?>
        <div class="updating"><?=_updatingg?></div>
    <?php }else{ ?>
      <?php if(count($album)<=0) { ?><div class="updating"><?=_updatingg?></div><?php }else{ ?>
        <?php for($i=0;$i<count($album);$i++){ ?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xx-6 col-xs-12">
              <div class="item_album" style="padding:3px;">
                <div class="img_album">
                  <a href="thu-vien-anh/<?=$album[$i]['tenkhongdau']?>.html" title="<?=$album[$i]['ten_vi']?>">
                    <img style="background:none;" src="<?=_upload_album_l?>260x155x1/<?=$album[$i]['photo']?>" alt="<?=$album[$i]['ten_vi']?>" onerror="this.src='uplaod/hinhanh/260x155x1/noimage.png'"/>
                    <h3><?=$album[$i]['ten_vi']?></h3>
                  </a>
                </div>
              </div>
          </div>
        <?php } ?>
      <?php }?>
      <div class="clear"></div>
      <div class="paging"><?=$paging?></div>
    <?php } ?>

    <div align="center" ><div class="paging"><?=$paging?></div></div>
<h1 class="visit_hidden fn vcard "><?=$row_setting['ten_'.$lang]?></h1>
</div>