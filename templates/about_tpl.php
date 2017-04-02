<div id="sanpham">        

  	<div class="thanh_index"><h2><?=$title_detail?></h2></div>
  	<div class="clear"></div>
  	<div class="noidung">
  	<?php if($row_detail['noidung_'.$lang]!=''){ ?>
  		<?=$row_detail['noidung_'.$lang]?>
  	<?php }else{ ?>
  		<div class="updating">
  			<?=_updatingg?>
  		</div>
  	<?php } ?>
  	</div>
  	<div class="clear"></div>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <div class="addthis_inline_share_toolbox"></div>

<h1 class="visit_hidden fn vcard "><?=$row_setting['ten_'.$lang]?></h1>
</div>