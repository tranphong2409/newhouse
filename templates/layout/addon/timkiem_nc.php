<?php 
    $d->reset();
    $sql = " select id,ten_$lang,tenkhongdau from #_baiviet_list where hienthi=1 and type='tinhthanh' order by stt asc ";
    $d->query($sql);
    $rs_tinhthanh = $d->result_array();

    $d->reset();
    $sql = " select id,ten_$lang,tenkhongdau from #_baiviet where hienthi=1 and type='huong' order by stt asc ";
    $d->query($sql);
    $rs_huong = $d->result_array();

    $d->reset();
    $sql = " select id,ten_$lang,tenkhongdau from #_baiviet where hienthi=1 and type='dientich' order by stt asc ";
    $d->query($sql);
    $rs_dientich = $d->result_array();

    $d->reset();
    $sql = " select id,ten_vi,giatu,giaden from #_gia where hienthi=1 order by stt asc ";
    $d->query($sql);
    $rs_gia = $d->result_array();

    $d->reset();
    $sql = " select id,ten_$lang,tenkhongdau from #_baiviet where hienthi=1 and type='phongngu' order by stt asc ";
    $d->query($sql);
    $rs_sophong = $d->result_array();

    $d->reset();
    $sql = " select id,ten_$lang,tenkhongdau from #_baiviet where hienthi=1 and type='loaidat' order by stt asc ";
    $d->query($sql);
    $rs_loaidat = $d->result_array();
?>
<?/*  Tìm kiếm nc  */?>
<script type="text/javascript">
  $(document).ready(function() {
    $("#content_tab_tk div#tabtk1,#content_tab_tk div#tabtk2,#content_tab_tk div#tabtk3").hide(); // Initially hide all content
    $("#tabstk li:first").attr("id","current"); // Activate first tab
    $("#tabstk li:first a").attr("class","active");
    $("#content_tab_tk div#tabtk1").fadeIn(); // Show first tab content

            
    $('#tabstk a').click(function(e) {
        e.preventDefault();        
        $("#content_tab_tk div#tabtk1,#content_tab_tk div#tabtk2,#content_tab_tk div#tabtk3").hide();    //Hide all content
        $("#tabstk li").attr("id",""); 
        $("#tabstk li a").attr("class","");//Reset id's
        $(this).parent().attr("id","current"); 
        $(this).attr("class","active");// Activate this
        $('#' + $(this).data('rel')).fadeIn(); // Show content for current tab
    });

  });
</script>
<div class="content_container">
   
    <div class="box_tknc">
        <div class="content_tknc">
            <div class="title_tk">Công cụ Tìm kiếm</div><div class="clear"></div>
            
                <ul id="tabstk">
                  <li><a href="#" data-rel="tabtk1">Nhà đất bán</a></li>
                  <li><a href="#" data-rel="tabtk2">Nhà đất cho thuê</a></li>
                  <li><a href="#" data-rel="tabtk3">Dự án</a></li>
                </ul>
                <div id="content_tab_tk">
                <div id="tabtk1">
                  <form action="tim-kiem-nha-dat" id="timkiemnd" name="timkiemnd" method="post" accept-charset="utf-8">
                    <input type="hidden" name="type" id="type" value="nhaban">
                    <div class="timkiemnd">
                        <select name="loaidat" id="loaidat">
                            <option value="">-- Chọn loại --</option>
                            <?php for($i=0;$i<count($rs_loainhaban);$i++){ ?>
                                <option value="<?=$rs_loainhaban[$i]['id']?>"> Bán <?=$rs_loainhaban[$i]['ten_'.$lang]?></option>
                            <?php } ?>
                        </select>
                        <div class="clear"></div>
                      <select name="quanhuyen" id="quanhuyennb">
                        <option value="">-- Chọn quận --</option>
                        <?php for($i=0;$i<count($rs_quan);$i++){ ?>
                        <option value="<?=$rs_quan[$i]['id']?>"><?=$rs_quan[$i]['ten_'.$lang]?></option>
                        <?php } ?>
                      </select>
                      <div class="clear"></div>
                        <select name="dientich" id="dientich">
                            <option value="">--Chọn diện tích --</option>
                            <?php for($i=0;$i<count($rs_dientich);$i++){ ?>
                                <option value="<?=$rs_dientich[$i]['id']?>"><?=$rs_dientich[$i]['ten_'.$lang]?></option>
                            <?php } ?>
                        </select>
                        <div class="clear"></div>
                      <select name="gia" id="gia">
                        <option value="">-- Chọn mức giá --</option>
                        <?php for($i=0;$i<count($rs_gianhaban);$i++){ if($rs_gianhaban[$i]['ten_vi']!=''){ ?>
                        <option value="<?=$rs_gianhaban[$i]['id']?>"><?=$rs_gianhaban[$i]['ten_vi']?></option>
                        <?php } } ?>
                      </select>
                      <div class="clear"></div>


                      <select name="huong" id="huong">
                        <option value="">-- Chọn hướng --</option>
                        <?php for($i=0;$i<count($rs_huong);$i++){ ?>
                        <option value="<?=$rs_huong[$i]['id']?>"><?=$rs_huong[$i]['ten_'.$lang]?></option>
                        <?php } ?>
                      </select>
                      <select name="sophong" id="sophong">
                        <option value="">-- Chọn số phòng --</option>
                        <?php for($i=0;$i<count($rs_sophong);$i++){?>
                        <option value="<?=$rs_sophong[$i]['id']?>"><?=$rs_sophong[$i]['ten_'.$lang]?></option>
                        <?php } ?>
                      </select>
                      <?php /*<input type="text" name="tukhoabds" id="tukhoabds" value="" placeholder="Mã tin">*/ ?>
                      <button class="link_tk nb" type="submit" >Tìm kiếm</button>
                    </div>
                  </form>
                </div><?//tabtk1?>

                <div id="tabtk2">
                  <form action="tim-kiem-nha-dat" id="timkiemnt" name="timkiemnt" method="post" accept-charset="utf-8">
                    <input type="hidden" name="type" id="type" value="chothue">
                    <div class="timkiemnd">
                      <select name="quanhuyen" id="quanhuyenct">
                        <option value="">-- Chọn quận --</option>
                        <?php for($i=0;$i<count($rs_quan);$i++){ ?>
                        <option value="<?=$rs_quan[$i]['id']?>"><?=$rs_quan[$i]['ten_'.$lang]?></option>
                        <?php } ?>
                      </select>
                      <div class="clear"></div>
                      <select name="phuongxa" id="phuongxa">
                        <option value="">-- Chọn phường --</option>
                      </select>
                      <div class="clear"></div>
                      <select name="gia" id="gia">
                        <option value="">-- Chọn mức giá --</option>
                        <?php for($i=0;$i<count($rs_gianhathue);$i++){ if($rs_gianhathue[$i]['ten_vi']!=''){ ?>
                        <option value="<?=$rs_gianhathue[$i]['id']?>"><?=$rs_gianhathue[$i]['ten_vi']?></option>
                        <?php } } ?>
                      </select>
                      <div class="clear"></div>
                      <select name="dientich" id="dientich">
                        <option value="">-- Chọn diện tích --</option>
                        <?php for($i=0;$i<count($rs_dientich);$i++){ ?>
                        <option value="<?=$rs_dientich[$i]['id']?>"><?=$rs_dientich[$i]['ten_'.$lang]?></option>
                        <?php } ?>
                      </select>
                      <div class="clear"></div>
                      <select name="loaidat" id="loaidat">
                        <option value="">-- Chọn loại --</option>
                        <?php for($i=0;$i<count($rs_loainhathue);$i++){ ?>
                            <option value="<?=$rs_loainhathue[$i]['id']?>">Thuê <?=$rs_loainhathue[$i]['ten_'.$lang]?></option>
                        <?php } ?>
                      </select>
                      <div class="clear"></div>
                      <select name="sophong" id="sophong">
                        <option value="">-- Chọn số phòng --</option>
                        <?php for($i=0;$i<count($rs_sophong);$i++){ ?>
                        <option value="<?=$rs_sophong[$i]['id']?>"><?=$rs_sophong[$i]['ten_'.$lang]?></option>
                        <?php } ?>
                      </select>
                      <?php /*<input type="text" name="tukhoabds" id="tukhoabds" value="" placeholder="Mã tin">*/ ?>
                      <button class="link_tk ct" type="submit" >Tìm kiếm</button>
                    </div>
                  </form>
                </div><?//tabtk2?>

                <div id="tabtk3">
                  <form action="tim-kiem-nha-dat" id="timkiemda" name="timkiemda" method="post" accept-charset="utf-8">
                    <input type="hidden" name="type" id="type" value="duan">
                    <div class="timkiemnd">
                      <select name="quanhuyen" id="quanhuyenct">
                        <option value="">-- Chọn quận --</option>
                        <?php for($i=0;$i<count($rs_quan);$i++){ ?>
                        <option value="<?=$rs_quan[$i]['id']?>"><?=$rs_quan[$i]['ten_'.$lang]?></option>
                        <?php } ?>
                      </select>
                      <div class="clear"></div>
                      <select name="loaidat" id="loaidat">
                        <option value="">-- Chọn loại --</option>
                        <?php for($i=0;$i<count($rs_loaiduan);$i++){ ?>
                            <option value="<?=$rs_loaiduan[$i]['id']?>"><?=$rs_loaiduan[$i]['ten_'.$lang]?></option>
                        <?php } ?>
                      </select>
                      <div class="clear"></div>
                      <button class="link_tk da" type="submit" >Tìm kiếm</button>
                    </div>
                  </form>
                </div><?//tabtk3?>
              </div><?//content_tab_tk?>
            
        </div>
      </div>

</div><?//content_container?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tinhthanh').on('change', function(event) {
            event.preventDefault();
            var id_tinh = $(this).val();
            $.ajax({
                url: 'ajax/quanhuyen.php',
                type: 'GET',
                data: {id_tinh:id_tinh},
                success:function(result){
                    $('#quanhuyen').html(result);
                }
            })
        });
        $('#quanhuyenct').on('change', function(event) {
            event.preventDefault();
            var id_quanhuyen = $(this).val();
            $.ajax({
                url: 'ajax/phuongxa.php',
                type: 'GET',
                data: {id_quanhuyen:id_quanhuyen},
                success:function(result){
                    $('#phuongxa').html(result);
                }
            })
        });
        $('#phuongxa').on('change', function(event) {
            event.preventDefault();
            var id_duongpho = $(this).val();
            $.ajax({
                url: 'ajax/duongpho.php',
                type: 'GET',
                data: {id_duongpho:id_duongpho},
                success:function(result){
                    $('#duongpho').html(result);
                }
            })
        });
    });
</script>