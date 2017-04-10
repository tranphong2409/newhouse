<div class="content3">
<?php 
include _template."layout/left1.php";?> 

<div class="right_member">
    <div class="title_right_member">
        <h2>Quản lý tin đăng</h2>
    </div>

    <div class="clear"></div>

    <?php /*?> <table style="width: 100%; margin-top: 20px;" class="t-4-c">
            <tbody>
                <tr>
                    <td class="colorblue">Từ ngày</td>
                    <td class="colorblue">Đến ngày</td>
                    <td class="colorblue">Loại tin</td>
                    <td class="colorblue">Loại hình</td>
                </tr>
                <tr>
                    <td>
                        <div class="advance-control">
                            <input placeHolder="Từ ngày" name="txtFromDate" type="text" value="" id="txtFromDate">
                           
                        </div>
                    </td>
                    <td>
                        <div class="advance-control">
                            <input name="" type="text" value="Đến ngày" id="txtToDate" >
                           
                        </div>
                    </td>
                    <td>
                        <div class="advance-control">
                           
                            <select name="loaitin_mb" id="loaitin_mb">
                                  <option value="">Chọn loại tin</option>
                                  option
                                      <?php 
                                           $loaitin1=get_loainhadat();
                                    for ($i=0,$c=count($loaitin1); $i < $c; $i++) { ?>
                                        <option <?php if($_GET['id_list']==$loaitin1[$i]["id"]) echo "selected='selected'" ?> value="<?=$loaitin1[$i]["id"]?>"><?=$loaitin1[$i]["ten_vi"]?></option>
                                    <?php } ?> 

                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="advance-control">
                            <select name="loaihinh_mb" id="loaihinh_mb">
                                <option  value="">Chọn loại hình</option>
                                
                                   <?php 
                                    $loaihinh_mb=get_loaihinh();
                                    for ($i=0,$c=count($loaihinh_mb); $i < $c; $i++) { ?>
                                        <option  <?php if($_GET['id_loaihinh']==$loaihinh_mb[$i]["id"]) echo "selected='selected'" ?>  value="<?=$loaihinh_mb[$i]["id"]?>"><?=$loaihinh_mb[$i]["ten_vi"]?></option>
                                 <?php } ?>   

                               </select>
                          
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="colorblue">Mã tin</td>
                </tr>
                <tr>
                    <td>
                        <input name="" type="text" id="" class="keycode">
                    </td>
                    <td colspan="3">
                        <input type="button" name="timkiem_mb" value="Tìm kiếm"  id="timkiem_mb" class="timkiem_mb" autopostback="true">

                        <span class="colorboldblue">
                            <strong>(Lưu ý khi nhập mã tin thì các bộ lọc khác không có tác dụng)</strong>
                        </span>

                    </td>
                </tr>
            </tbody>
    </table> <?php */?>

  <div class="clear"></div>

  <div id="xoahet">Xóa tin đã chọn.<span></span></div>

  <div id="table_member">
    <table class="tbl" border="0" cellpadding="3px" cellspacing="0" width="100%">
            <tbody>

            <tr class="tit-tbl bg_tit">
                <th style="width: 40px">
                    STT
                </th>
                <th style="width: 70px">
                    Mã tin
                </th>
                <th style="width: 330px">
                    Tiêu đề
                </th>
                <th style="width: 70px">
                    Lượt xem
                </th>
                <th style="width: 90px">
                    Ngày Đăng
                </th>
                <th style="width: 70px">
                    Loại tin
                </th>
                <th style="width: 70px">
                    Loại đất
                </th>
            </tr>
      <?php for ($i=0; $i <count($tintuc) ; $i++) { ?>
        <tr>
            <td>
                <input type="checkbox" value="<?=$tintuc[$i]['id']?>" id="checkbox" name="chon">
                <?=$i+1?>
            </td>

            <td class="aligncenter">
                <p>
                    <?=$tintuc[$i]['id']?>
                   
                </p>
                <?php if($tintuc[$i]['hienthi']>0) echo "Đã duyệt"  ?>
                <?php if($tintuc[$i]['hienthi']==0) echo "Chưa duyệt"  ?>
            </td>

            <td>
                <?php

                     // $hinhanh=get_images($tintuc[$i]['id']);
                     
                      $com= get_loainhadat($tintuc[$i]['id_loaidat']);

                      // $loaihinh_mb1=get_loaitin($tintuc[$i]['id']);
                      $loaitin=array('nhaban'=>'Nhà bán','chothue'=>'Cho thuê','duan'=>'Dự án');
                      $loaicom=array('nhaban'=>'nha-dat-ban','chothue'=>'cho-thue','duan'=>'du-an-dat');

                 ?>
                <a style="float: left; word-wrap: break-word; color: #055699;padding-top:5px;" id="view_9712101"  target="_blank" <?php if($tintuc[$i]['hienthi']==1) { ?> href="<?=$loaicom[$tintuc[$i]['type']]?>/<?=$tintuc[$i]['tenkhongdau']?>" <?php } else { ?> href="javascript:void(0)"  <?php } ?>>
                    
                    <?php if(count($hinhanh)==0) { ?>

                              <?php if($tintuc[$i]['id_loaihinh']==1) { ?>
                                
                                  <img style="width: 77px; height: 62px; float: left; padding-right: 8px;" src="images/default3.png" alt="cần thuê" />
                                

                              <?php } elseif($tintuc[$i]['id_loaihinh']==4) { ?>
                             
                                   <img style="width: 77px; height: 62px; float: left; padding-right: 8px;" src="images/default2.png" alt="cần mua" />
                                 
                              <?php } else { ?>
                                
                                    <img style="width: 77px; height: 62px; float: left; padding-right: 8px;" onerror="this.src='images/default1.png'" src="<?=_upload_baiviet_l.$hinhanh[0]['thumb']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>" />
                              

                            <?php } } else {  ?>


                                   
                                    <img style="width: 77px; height: 62px; float: left; padding-right: 8px;" onerror="this.src='images/default1.png'" src="<?=_upload_baiviet_l.$hinhanh[0]['thumb']?>" alt="<?=$tintuc[$i]['ten_'.$lang]?>" />
                             

                      <?php } ?>

                    <?=$tintuc[$i]['ten_vi']?>
                </a>

                <div style="clear: both; text-align: right; padding-top: 5px;" class="div_view">
                    <a <?php if($tintuc[$i]['hienthi']==1) { ?> href="<?=$loaicom[$tintuc[$i]['type']]?>/<?=$tintuc[$i]['tenkhongdau']?>" <?php } else { ?> href="javascript:void(0)"  <?php } ?> target="blank" title="Xem" class="grey">
                        <img src="images/xem.gif">
                        Xem
                    </a>&nbsp;

                    <a  href="trang-ca-nhan/edit/<?=$tintuc[$i]['id']?>.html">

                    <img src="images/sua.gif"> Sửa</a>&nbsp;

                    <a id="" class="btn-xoa" href="trang-ca-nhan/delete/<?=$tintuc[$i]['id']?>.html">Xóa</a>
                    
                    <a href="javascript:void(0);" title="Hạ tin" class="grey">
                        
                        
                    </a>
                  
                </div>
            </td>

            <td class="aligncenter">
                <p>
                    <a  class="grey" style="text-decoration: underline"><?=$tintuc[$i]['luotxem']?></a>
                </p>
               
                
            </td>
            <td class="aligncenter">
                <p>
                    <?=date('d/m/Y',$tintuc[$i]['ngaytao'])?>
                </p>
            </td>
            <td class="aligncenter">
                <p>
                   <?=$loaitin[$tintuc[$i]['type']]?>  
                </p>
            </td>
            <td class="aligncenter">
                <p>
                    
                    <?=$com['ten_vi']?>
                </p>
            </td>
         </tr>

      <?php } ?>
      

    
        </tbody>
  </table>
  </div>

</div>    
  
</div>


<h1 class="visit_hidden"><?=$row_setting['ten_'.$lang]?></h1>

<script type="text/javascript">
    
    $(function() {
      $( "#txtFromDate" ).datepicker({dateFormat:'dd-mm-yy'});
      $( "#txtToDate" ).datepicker({dateFormat:'dd-mm-yy'});
    });

    $(document).ready(function() {
        $('#timkiem_mb').click(function(event) {

            var ngaybd=$('#txtFromDate').val();

            var ngaykt=$('#txtToDate').val();
            var id_loaitin=$('#loaitin_mb').val();
            var id_loaihinh=$('#loaihinh_mb').val();
            var ma=$('.keycode').val();
              $.ajax({
              url: 'ajax/ajax_timkiem.php',
              type: 'POST',
              data:{ngaykt:ngaykt,ngaybd:ngaybd,id_loaitin:id_loaitin,id_loaihinh:id_loaihinh,ma:ma},
            
              success:function(data){
                $('#table_member').html(data);
              }
            });
        });

           $("#xoahet").click(function(){
            var listid="";
            $("input[name='chon']").each(function(){
              if (this.checked) listid = listid+"-"+this.value;
              })
            listid=listid.substr(1);   //alert(listid);
            if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}
            hoi= confirm("Bạn có chắc chắn muốn xóa?");
            if (hoi==true) document.location = "trang-ca-nhan/delete_all/"+listid+".html";
          });

    });


</script>
<style type="text/css">
#container{position:relative;z-index:1;}
</style>