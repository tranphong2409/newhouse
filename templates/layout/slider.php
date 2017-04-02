<?php 
    $d->reset();
    $sql = " select id,ten_$lang,tenkhongdau,thumb from #_baiviet where hienthi=1 and noibat<>0 and type='tintuc' order by stt asc ";
    $d->query($sql);
    $rs_tintuc = $d->result_array();
?>
<div id="ctn_slide_hid">
    <?php include _template."layout/jssor2_js.php"; ?>
    <div id="slider22_container" style="position: relative; top: 0px; left: 0px; width: 640px;height: 385px;margin:0px auto">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 640px; height: 385px;overflow: hidden;">
        <?php for($i=0;$i<count($result_slider);$i++){ ?>
            <div>
                <a u=image href="<?=$result_slider[$i]['link']?>"><img src="<?=_upload_hinhanh_l?>640x385x1/<?=$result_slider[$i]['thumb_vi']?>" alt="<?=$row_setting['ten_'.$lang]?>" /></a>
            </div>
        <?php } ?>
        </div>
        <!-- Trigger -->
        <script>
            jssor_slider22_starter('slider22_container');
        </script>
    </div>
</div><?//ctn_slide?>
<div class="clear"></div>
<div class="container">
<div class="timkiemnc">
    <?php include _template."layout/addon/timkiem_nc.php"; ?>
</div><?//timkiemnc?>
<div class="nbsp">&nbsp;</div>
<div id="ctn_slide">
    <?php include _template."layout/jssor_js.php"; ?>
    <div id="slider2_container" style="position: relative; top: 0px; left: 0px; width: 640px;height: 385px;margin:0px auto">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 640px; height: 385px;overflow: hidden;">
        <?php for($i=0;$i<count($result_slider);$i++){ ?>
            <div>
                <a u=image href="<?=$result_slider[$i]['link']?>"><img src="<?=_upload_hinhanh_l?>640x385x1/<?=$result_slider[$i]['thumb_vi']?>" alt="<?=$row_setting['ten_'.$lang]?>" /></a>
            </div>
        <?php } ?>
        </div>
        <!-- Trigger -->
        <script>
            jssor_slider2_starter('slider2_container');
        </script>
    </div>
</div><?//ctn_slide?>
<div class="nbsp">&nbsp;</div>
<?php if(count($rs_tintuc)>4){ ?>
<script type="text/javascript">
    var dem = 1;
    setInterval(function(){

        $('.item_btt:nth-child(1)').slideUp(800, function(){
             $(this).remove();
        });
        //$('.item_btt:nth-child(1)').remove();
        
        $.ajax({
            url: 'ajax/ajax_tintuc.php',
            data: {dem:dem},
            success:function(result){
                $('.box_tintuc').append(result);
            }
        });        
        
        if(dem+1 < <?=count($rs_tintuc)?>){
            dem++;
        }else{
            dem = 1;
        }

    },3000);
</script>
<?php } ?>
<div id="tintucnb">
    <div class="box_tintuc">
        <?php for($i=0;$i<count($rs_tintuc);$i++){ ?>
        <div class="item_btt item_<?=$i?>">
            <a href="tin-tuc/<?=$rs_tintuc[$i]['tenkhongdau']?>" title="<?=$rs_tintuc[$i]['ten_'.$lang]?>">
                <img src="<?=_upload_baiviet_l?>102x71x1/<?=$rs_tintuc[$i]['thumb']?>" alt="<?=$rs_tintuc[$i]['ten_'.$lang]?>" onerror="this.src='upload/hinhanh/102x71x1/noimage.png'"/>
                <?=catchuoi($rs_tintuc[$i]['ten_'.$lang],70)?>
            </a>
        </div>
        <?php } ?>
    </div>
</div><?//tintucnb?>
<div class="clear"></div>
</div>