<?php 
  $d->reset();
  $sql = "select id,thumb_vi,link,ten_vi from #_photo where hienthi=1 and type='imgtrangchu' order by stt asc ";
  $d->query($sql);
  $rs_qc = $d->result_array();
?>
<?php if(count($rs_qc)>2){ ?>
<script type="text/javascript">
    var demqc = 0;
    setInterval(function(){

        $('.imgqc:nth-child(1)').slideUp(800, function(){
             $(this).remove();
        });
        //$('.item_btt:nth-child(1)').remove();
        
        $.ajax({
            url: 'ajax/ajax_quangcao.php',
            data: {demqc:demqc},
            success:function(result){
                $('.danhmuc').append(result);
            }
        });        
        
        if(demqc+1 < <?=count($rs_qc)?>){
            demqc++;
        }else{
            demqc = 0;
        }

    },3000);
</script>
<?php } ?>
<div id="left">

  <?php if($_GET['com']!=''&&$_GET['com']!='index'&&$_GET['com']!='trang-chu'){ ?>
  <div class="danhmuc">
    <div class="timkiemnc" style="width:100%;">
      <?php include _template."layout/addon/timkiem_nc.php"; ?>
    </div><?//timkiemnc?>
  </div>
  <div class="clear" style="height:20px;"></div>
  <?php } ?>

  <div class="danhmuc">
    <?php for($i=0;$i<count($rs_qc);$i++){ ?>
      <div class="imgqc">
        <a href="<?=$rs_qc[$i]['link']?>" target="_blank" title="<?=$rs_qc[$i]['ten_vi']?>"><img src="<?=_upload_hinhanh_l?>270x300x2/<?=$rs_qc[$i]['thumb_vi']?>" alt="<?=$rs_qc[$i]['ten_vi']?>" onerror="this.src='upload/hinhanh/270x300x1/noimage.png'"/></a>
        <div class="clear" style="height:10px;"></div>
      </div>
    <?php } ?>
  </div>
</div>