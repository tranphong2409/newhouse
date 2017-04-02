<?php
	if($_GET['idl']!=''){
		$d->reset();
		$sql = "select * from #_product_list where tenkhongdau='".$_GET['idl']."' ";
		$d->query($sql);
		$row_detail_list = $d->fetch_array();
	}
	if($_GET['idc']!=''){ 

		$d->reset();
		$sql = "select * from #_product_cat where tenkhongdau='".$_GET['idc']."' ";
		$d->query($sql);
		$row_detail_cat = $d->fetch_array();

		$d->reset();
		$sql = "select * from #_product_list where id='".$row_detail_cat['id_list']."' ";
		$d->query($sql);
		$row_detail_list = $d->fetch_array();
	}

	if($_GET['idi']!=''){

		$d->reset();
		$sql = "select * from #_product_item where tenkhongdau='".$_GET['idi']."' ";
		$d->query($sql);
		$row_detail_item = $d->fetch_array();

		$d->reset();
		$sql = "select * from #_product_cat where id='".$row_detail_item['id_cat']."' ";
		$d->query($sql);
		$row_detail_cat = $d->fetch_array();

		$d->reset();
		$sql = "select * from #_product_list where id='".$row_detail_item['id_list']."' ";
		$d->query($sql);
		$row_detail_list = $d->fetch_array();
	}

	if($_GET['ids']!=''){

		$d->reset();
		$sql = "select * from #_product_sub where tenkhongdau='".$_GET['ids']."' ";
		$d->query($sql);
		$row_detail_sub = $d->fetch_array();

		$d->reset();
		$sql = "select * from #_product_item where tenkhongdau='".$row_detail_item['idi']."' ";
		$d->query($sql);
		$row_detail_item = $d->fetch_array();

		$d->reset();
		$sql = "select * from #_product_cat where id='".$row_detail_item['id_cat']."' ";
		$d->query($sql);
		$row_detail_cat = $d->fetch_array();

		$d->reset();
		$sql = "select * from #_product_list where id='".$row_detail_item['id_list']."' ";
		$d->query($sql);
		$row_detail_list = $d->fetch_array();
	}
	

?>
<script type="text/javascript">
$(document).ready(function(){
	$('.cont-filter-attr input').click(function(){
		$('.cont-filter-attr input:checked').each(function(){
			var checkedValue = $(this).val();
			if(checkedValue){
				var id = $(this).val();
				link = link+''+id;
			}
		});
		window.location.href=link;
	});
});
</script>

<div class="dieuhuong">  

    <a href="trang-chu.html" itemprop="url" title="<?=_trangchu?>" class="link_dh fir"><span itemprop="title"><?=_trangchu?></span></a>

    
    <a href="<?=$com?>" itemprop="url" title="<?=$title_detail?>" class="link_dh"><span itemprop="title">/&nbsp;&nbsp;&nbsp;&nbsp;<?php 
    if(!empty($title_detail)){
      
    }
    else{
      $darr=array("nha-dat-ban"=>"Nhà đất bán","cho-thue"=>"Cho thuê","du-an-dat"=>"Dự án");
      echo $darr[$com];
    }
    ?></span></a>

    
	<?php if($_GET['id']!=''){ ?>
	<a title="<?=$row_detail['ten_'.$lang]?>" itemprop="url" href="<?=$com?>/<?=$row_detail['tenkhongdau']?>" class="link_dh"><span itemprop="title">/&nbsp;&nbsp;&nbsp;&nbsp;<?=$row_detail['ten_'.$lang]?></span></a>
	<?php } ?>
</div>
