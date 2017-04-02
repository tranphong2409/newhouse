<script src="administrator/ckeditor/ckeditor.js"></script>
 <script type="text/javascript" src="js/jquery.price_format.2.0.js"></script>
<link href="administrator/js/plugins/multiupload/css/jquery.filer.css" type="text/css" rel="stylesheet" />
<link href="administrator/js/plugins/multiupload/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
<!-- MultiUpload -->
<script type="text/javascript" src="administrator/js/plugins/multiupload/jquery.filer.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        //ckeditor
        $(".ck_editor").each(function(index, el) {
            CKEDITOR.replace( $(this).find("textarea").attr("id"), {
                height : 300,
                entities: false,
                basicEntities: false,
                entities_greek: false,
                entities_latin: false,
                filebrowserBrowseUrl : 'administrator/ckfinder/ckfinder.html',
                filebrowserImageBrowseUrl : 'administrator/ckfinder/ckfinder.html?type=Images',
                filebrowserFlashBrowseUrl : 'administrator/ckfinder/ckfinder.html?type=Flash',
                filebrowserUploadUrl : 'administrator/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                filebrowserImageUploadUrl : 'administrator/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                filebrowserFlashUploadUrl : 'administrator/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                allowedContent:
                    'h1 h2 h3 p blockquote strong em;' +
                    'a[!href];' +
                    'img(left,right)[!src,alt,width,height];' +
                    'table tr th td caption;' +
                    'span{!font-family};' +
                    'span{!color};' +
                    'span(!marker);' +
                    'del ins'
                });
        });
    });
</script>


<script type="text/javascript">     

    $(document).ready(function() {
        $('.update_stt').keyup(function(event) {
            var id = $(this).attr('rel');
            var table = 'dangtin_photo';
            var value = $(this).val();
            $.ajax ({
                type: "POST",
                url: "administrator/ajax/update_stt.php",
                data: {id:id,table:table,value:value},
                success: function(result) {
                }
            });
        });

        $('.delete_images').click(function(){

          if (confirm('Bạn có muốn xóa hình này ko ? ')) {
            var id = $(this).attr('title');
            var table = 'dangtin_photo';
            var links = "<?=_upload_baiviet;?>";
            $.ajax ({
              type: "POST",
              url: "administrator/ajax/delete_images.php",
              data: {id:id,table:table,links:links},
              success: function(result) { 
              }
            });
            $(this).parent().slideUp();
          }
          return false;
        });
    });
</script>

<div class="content3">

<?php include _template."layout/left1.php";?> 

<div class="right_member">
    <div class="title_right_member">
        <h2>Cập nhật tin đăng</h2>
    </div>

    <div class="clear"></div>

    <form method="post" name="frmdangtin" action="" id="frmdangtin" enctype="multipart/form-data">


    <div class="title_info">
        <h2>Thông tin cơ bản</h2>
    </div>
    <div class="noidung_detail">

            <div class="wrap-address">  
                    <div class="adv-control1">

                        <div class="left_select">
                            <p>Tỉnh/Thành (<span>*</span>)</p>
                        </div>
                         <div class="field-content2 field-content-chosen">
                          <select required name="tinh" class="chosen-select select select_tinh1" id="tinh"  >
                             <option value=""> Chọn Tỉnh/Thành</option>  
                                    <?php 
                                          $tinh = get_tinhthanh("tinh");
                                          for ($i=0,$c=count($tinh); $i < $c; $i++) { ?>
                                          <option <?php if($dangtin_detail['id_tinh']==$tinh[$i]['id']) echo "selected='selected'" ?> value="<?=$tinh[$i]["id"]?>"><?=$tinh[$i]["ten"]?></option>
                                    <?php }?>  


                          </select>
                          <!--  <label id="tinh-error" class="error" for="tinh"></label> -->
                         </div>
                    </div>
                    <div style="padding-right:0px;" class="adv-control1">
                           <div class="left_select">
                                <p>Quận/Huyện (<span>*</span>)</p>
                            </div>
                             <div class="field-content2 field-content-chosen">
                              <select required  name="huyen" id="huyen" class=" chosen-select select select_huyen1"  >
                                    <?php 
                                          $huyen = get_tinhthanh("huyen");
                                          for ($i=0,$b=count($huyen); $i < $b; $i++) { ?>
                                          <option <?php if($dangtin_detail['id_huyen']==$huyen[$i]['id']) echo "selected='selected'" ?> value="<?=$huyen[$i]["id"]?>"><?=$huyen[$i]["ten"]?></option>
                                      <?php } ?> 
                              </select>
                             <!--  <label id="huyen-error" class="error" for="huyen"></label> -->
                            </div>

                    </div>
                    <div class="adv-control1">

                             <div class="left_select">
                                <p>Chọn Phường/Xã (<span>*</span>)</p>
                            </div>
                             <div class="field-content2 field-content-chosen">
                              <select required name="xa" id="xa" class="chosen-select select_xa1" >
                                        <?php 
                                              $d->reset();
                                             $sql = "select ten,id from #_xa where id='".$dangtin_detail['id_xa']."' ";
                                              $d->query($sql);
                                              $xa = $d->fetch_array();

                                            ?>
                                          <option  value="<?=$dangtin_detail['id_xa']?>"><?=$xa['ten']?></option>
                              </select>   
                             <!--  <label id="xa-error" class="error" for="xa"></label> -->
                            </div>
                        
                    </div>

                    <div style="padding-right:0px;" class="adv-control1">

                             <div class="left_select">
                                <p>Chọn Đường (<span>*</span>)</p>
                            </div>
                             <div class="field-content2 field-content-chosen">
                              <select required name="duong" id="duong" class="chosen-select select_duong1" >
                                        <?php 
                                              $d->reset();
                                             $sql = "select ten,id from #_duong where id='".$dangtin_detail['id_duong']."' ";
                                              $d->query($sql);
                                              $duong = $d->fetch_array();

                                            ?>
                                          <option  value="<?=$dangtin_detail['id_duong']?>"><?=$duong['ten']?></option>
                              </select>   
                             <!--  <label id="xa-error" class="error" for="xa"></label> -->
                            </div>
                        
                    </div>

                    <div class="row-field">
                            <div class="left_select">
                                <p>Địa chỉ(<span>*</span>)</p>
                            </div>
                            <div class="field-content1">
                                <input placeHolder="Nhập địa chỉ" required  name="diachi" type="text" value="<?=($_POST['diachi']=='')?$dangtin_detail['diachi']:$_POST['diachi']?>" id="diachi">

                                <!--  <label id="diachi-error" class="error" for="diachi"></label> -->
                            </div>
                    </div>


                    <div style="padding-right:0px;" class="adv-control1">
                            <?php $loaitin=get_loainhadat() ?>
                             <div class="left_select">
                               <p>Loại tin đăng(<span>*</span>)</p>
                            </div>
                             <div class="field-content2">
                              <select required name="loaitin" id="loaitin" class="select_loaitin" >
                                <option value="">Loại tin đăng</option>
                                 <?php for ($i=0; $i <count($loaitin) ; $i++) { ?>
                                     
                                      <option <?php if($dangtin_detail['id_loaitin']==$loaitin[$i]['id']) echo "selected='selected'" ?> value="<?=$loaitin[$i]['id']?>"><?=$loaitin[$i]['ten_vi']?></option>
                                     option
                                  <?php } ?>
                              </select> 
                            <!--   <label id="loaitin-error" class="error" for="loaitin"></label>   -->
                            </div>
                        
                    </div>


                    <div class="adv-control1">
                             <?php $loaihinh=get_loaihinh() ?>
                             <div class="left_select">
                                  <p>Loại Hình(<span>*</span>)</p>
                            </div>
                             <div class="field-content2">
                                <select required name="loaihinh" id="loaihinh" class="select_loaihinh" >
                                 <option value="">Loại Hình</option>
                                     <?php for ($i=0; $i <count($loaihinh) ; $i++) { ?>
                                       
                                        <option <?php if($dangtin_detail['id_loaihinh']==$loaihinh[$i]['id']) echo "selected='selected'" ?> value="<?=$loaihinh[$i]['id']?>"><?=$loaihinh[$i]['ten_vi']?></option>
                                       option
                                    <?php } ?>
                                </select> 
                              <!--    <label id="loaihinh-error" class="error" for="loaihinh"></label>   -->
                           </div> 
                        
                    </div>

                    <div style="padding-right:0px;" class="adv-control1">
                            <?php $huong=get_huong() ?>
                             <div class="left_select">
                                  <p>Hướng nhà(<span>*</span>)</p>
                            </div>
                             <div class="field-content2">
                                <select multiple="multiple"  required name="huong[]" id="huong" class="select_huong" >

                                <?php $id_huong=explode(',',$dangtin_detail['id_huong'] );

                                  
                                 ?>
                                  
                                  <?php for ($i=0; $i <count($huong) ; $i++) { ?>

                                       <option <?php if($id_huong!=""){ if(in_array($huong[$i]['id'],$id_huong)) echo "selected='selected'"; }?> value="<?=$huong[$i]['id']?>"><?=$huong[$i]['ten_vi']?></option>
                                      
                                  <?php } ?>
                                 
                                </select>  
                                  <!--  <label id="huong-error" class="error" for="huong"></label>   -->
                             </div>
                        
                    </div>

                    <div class="adv-control1">
                            <?php $tinhtrang=get_phaply() ?>
                             <div class="left_select">
                                  <p>Tình trạng pháp lý(<span>*</span>)</p>
                            </div>
                             <div class="field-content2">
                                  <select required name="tinhtrang" id="tinhtrang" class="select_tinhtrang" >
                                    <option value="">Tình trạng pháp lý</option>
                                    <?php for ($i=0; $i <count($tinhtrang) ; $i++) { ?>
                                         
                                         <option <?php if($dangtin_detail['id_tinhtrang']==$tinhtrang[$i]['id']) echo "selected='selected'" ?> value="<?=$tinhtrang[$i]['id']?>"><?=$tinhtrang[$i]['ten_vi']?></option>
                                         option
                                    <?php } ?>
                                   
                                  </select>
                                 <!--  <label id="tinhtrang-error" class="error" for="tinhtrang"></label>      -->
                             </div>
                        
                    </div>


                     <div style="padding-right:0px;" class="row-field">
                        <div class="left_select">
                            <p>Giá(<span>*</span>)</p>
                        </div>
                        <div class="field-content1">
                            <input placeHolder="Nhập giá" required name="gia" type="text" value="<?=($_POST['gia']=='')?$dangtin_detail['gia']:$_POST['gia']?>" id="gia">

                            <!--  <label id="gia-error" class="error" for="gia"></label> -->
                        </div>
                    </div>
        </div>
    </div>

    <div class="clear"></div>
    <div class="title_info">
        <h2>Thông tin khác</h2>
    </div>
    <div class="noidung_detail">

               
              <div class="row-field1">
               <div class="left_select">
                    <p>Diện tích(m&sup2;)</p>
                </div>
                 <div class="field-content1">
                <div class="row_field3">
                   
                    <div class="field-content3">
                        <input placeHolder="Nhập diện tích" name="dientich" type="text" value="<?=($_POST['dientich']=='')?$dangtin_detail['dientich']:$_POST['dientich']?>" id="dientich">
                    </div>
                </div>

                 <div class="row_field3">
                   
                    <div class="field-content3">
                        <input name="mattien" placeHolder="Mặt tiền(m)" type="text" value="<?=($_POST['mattien']=='')?$dangtin_detail['mattien']:$_POST['mattien']?>" id="mattien">
                    </div>
                </div>

                 <div style="padding-right:0px;" class="row_field3">
                    
                    <div class="field-content3">
                        <input placeHolder="Đường vào(m)" name="duongvao" type="text" value="<?=($_POST['duongvao']=='')?$dangtin_detail['duongvao']:$_POST['duongvao']?>" id="duongvao">
                    </div>
                </div>
              </div>
                <div class="clear"></div>
            </div>

             <div class="row-field1">
               <div class="left_select">
                    <p>Thông tin</p>
                </div>
                 <div class="field-content1">
                <div class="row_field3">
                   
                    <div class="field-content3">
                        <input placeHolder="Nhập số lầu" name="solau" type="text" value="<?=($_POST['solau']=='')?$dangtin_detail['solau']:$_POST['solau']?>" id="MainContent__register_txtAddress">
                    </div>
                </div>

                 <div class="row_field3">
                   
                    <div class="field-content3">
                        <input name="sophongngu" placeHolder="Nhập số phòng" type="text" value="<?=($_POST['sophongngu']=='')?$dangtin_detail['sophongngu']:$_POST['sophongngu']?>" id="MainContent__register_txtAddress">
                    </div>
                </div>

                 <div  style="padding-right:0px;" class="row_field3" class="row_field3">
                    
                    <div class="field-content3">
                        <input placeHolder="Nhập số toilet" name="sophongkhac" type="text" value="<?=($_POST['sophongkhac']=='')?$dangtin_detail['sophongkhac']:$_POST['sophongkhac']?>" id="MainContent__register_txtAddress">
                    </div>
                </div>
              </div>
                <div class="clear"></div>
            </div>

    </div>

                 
    <div class="clear"></div>

    <div class="title_info">
        <h2>Bản đồ</h2>
    </div>
    <div class="noidung_detail">

         <div class="row-field1">
            <div class="left_select left_select5">
                <p>Nhập tọa độ bản đồ</p>
            </div>
            <div class="field-content1">
                    <input placeHolder="Nhập tọa độ bản đồ"  name="toado" type="text" value="<?=($_POST['toado']=='')?$dangtin_detail['toado']:$_POST['toado']?>" id="MainContent__register_txtAddress">
            </div>

            <div class="clear"></div>

            <div style="margin-top:10px;" class="item-input">                
                <div class="form-editor content-item-map">
                    <div class="map-wrapper">
                        <div class="map-content">
                            <div id="BanDo2" class="map-edit"></div>
                        </div>
                    </div>
                    <div id="tienich" style="display:none"></div><!--tienich-->
                    <div style="display:none">
                        <input type="text" id="address" value="Địa chỉ" />
                        <input type="button" class="button primaryAction btn btn-primary" value="Go" onclick="geocode()" /> 
                           
                        <input id="Latitude" name="Latitude" type="text" value="10.8537915" />
                        <input id="Longitude" name="Longitude" type="text" value="106.6261557" />
                    </div>
                </div><!--content-item-map-->   
            </div>

        </div>

        <div class="clear"></div>


    </div>
    <div class="clear"></div>

    <div class="title_info">
        <h2>Thông tin chi tiết</h2>
    </div>
    <div class="noidung_detail">


            <div class="row-field1">
                <div class="left_select left_select5">
                    <p>Tiêu đề(<span>*</span>)</p>
                </div>
                <div class="field-content1 field-content4">
                    <input placeHolder="Nhập tiêu đề" required name="tieude" type="text" value="<?=($_POST['tieude']=='')?$dangtin_detail['ten_vi']:$_POST['tieude']?>" id="tieude">
                   <!--  <label id="tieude-error" class="error" for="tieude"></label> -->
                </div>
            </div>

             <div class="row-field1">
                <div class="left_select left_select5">
                    <p>Nội dung(<span>*</span>)</p>
                </div>
                <div class="field-content1 field-content5">
                    
                   <div class="formRight ck_editor">
                         <textarea  required rows="4" cols="" title="Nhập nội dung . " id="noidung" class="noidung"  name="noidung"><?=$dangtin_detail['noidung_vi']?></textarea>
                    </div>
                    <!--  <label id="noidung-error" class="error" for="noidung"></label>
 -->
                </div>
            </div>

            <div class="row-field1">
                <div class="left_select left_select5">
                    <p>Đăng hình ảnh(<span>*</span>)</p>
                </div>
                <div class="field-content1 field-content4">
              
                    <div class="image-wapper">
                            <div class="image-wapper-label">
                                ĐĂNG ẢNH THẬT ĐỂ ĐƯỢC HIỆU QUẢ NHẤT!
                            </div>
                            <div class="image-wapper-take">
                               <a class="file_input" data-jfiler-name="files" data-jfiler-extensions="jpg, jpeg, png, gif"><img src="administrator/images/image_add.png" alt="" width="100"></a> 



                            </div>
                            <div class="image-wapper-des">
                                <div>Click vào dấu cộng ở trên để up hình,</div>
                                <div>bạn có thể up tối đa 30 hình, mỗi hình tối đa 6MB</div>
                            </div>

                            <div class="clear"></div>

                            <div style="padding-top:10px;" class="image_curent">

                             
                              <?php if(count($ds_photo)!=0) { ?>       
                                    <?php for($i=0;$i<count($ds_photo);$i++){?>
                                      <div class="item_trich">
                                          <img class="img_trich" width="140px" height="110px" src="<?=_upload_baiviet_l.$ds_photo[$i]['photo']?>" />
                                          <input type="text" rel="<?=$ds_photo[$i]['id']?>" value="<?=$ds_photo[$i]['stt']?>" class="update_stt tipS" />
                                          <a class="delete_images" title="<?=$ds_photo[$i]['id']?>"><img src="images/delete.png"></a>
                                      </div>
                                    <?php } ?>
                                
                              <?php }?>

                            </div>
                    </div>


                </div>
            </div>
    </div>

    <div class="clear"></div>
   

    <div class="title_info">
        <h3>Thông tin liên hệ</h3>
    </div>

    <div class="clear"></div>

    <div  class="noidung_detail">


           
           <div class="row-field1">
                <div class="left_select left_select5">
                    <p>Họ tên(<span>*</span>)</p>
                </div>
                <div class="field-content1 field-content5">
                    <input placeHolder="Nhập họ tên" required name="hoten" type="text" value="<?=($_POST['hoten']=='')?$dangtin_detail['hoten']:$_POST['hoten']?>" id="hoten">
                    <!--  <label id="hoten-error" class="error" for="hoten"></label> -->
                </div>
            </div>

            <div class="row-field1">
                <div class="left_select left_select5">
                    <p>Số di động(<span>*</span>)</p>
                </div>
                <div class="field-content1 field-content5">
                    <input placeHolder="Nhập số điện thoại" name="dienthoai" required type="text" value="<?=($_POST['dienthoai']=='')?$dangtin_detail['dienthoai']:$_POST['dienthoai']?>" id="dienthoai">
                    <!--  <label id="dienthoai-error" class="error" for="dienthoai"></label> -->
                </div>
            </div>

             <div class="row-field1">
                <div class="left_select left_select5">
                    <p>Địa chỉ</p>
                </div>
                <div class="field-content1 field-content5">
                    <input placeHolder="Nhập địa chỉ"  name="diachi1" type="text" value="<?=($_POST['diachi1']=='')?$dangtin_detail['diachilienhe']:$_POST['diachi1']?>" id="diachi1">
                     <!-- <label id="diachi1-error" class="error" for="diachi1"></label> -->
                </div>
            </div>

            <div class="row-field1">
                <div class="left_select left_select5">
                    <p>Nhập mã capcha(<span>*</span>)</p>
                </div>
                <div class="field-content1 field-content5">
                     <div class="captcha-content">
                       
                         <img class="img_capcha" style="float:left;" src="dkdn_custom/captcha.php"  class="captcha " id="img_capcha"/>

                         <div class="capcha_img capcha_img1"> </div>

                            <div class="clear"></div>
              
                        <div class="box_input ">
                        
                          <input type="text" name="captcha" id="captcha" required placeholder="<?=_nhapmanhuhinh?>" class="input hover_box"/>
                        </div>
                       <!--  <label id="captcha-error" class="error" for="captcha"></label>  -->
                        <label id="msg_capcha"></label>
                        <div class="clear"></div>

                        <div style="color: #717171;margin-top:10px;">
                            (Mã an toàn có phân biệt chữ hoa, chữ thường. Trong trường hợp hiện ra thông báo "Mã an toàn bạn nhập vào chưa đúng" bạn vui lòng nhấn vào nút
                        <img width="15px" src="images/icon-reload.png">
                            để tạo mã an toàn mới và thử lại)
                        </div>
                        <div class="captcha-msg"></div>
                    </div>
                </div>
            </div>

             <div class="row-field1">
                <div class="left_select left_select5">
                   
                </div>
                <div class="field-content1 field-content5">
                     <input type="submit"  name='input_dangtin'  class="input_dangtin" value="Lưu lại" />
                </div>
            </div>

    </div>

    </form>
</div>
 
</div>

<h1 class="visit_hidden"><?=$row_setting['ten_'.$lang]?></h1>






<style>
    .map-wrapper { width: 100%;position: relative;}
    .map-edit {width: 100%;height: 350px; border: 1px solid #BBBBBB; overflow:inherit !important;}
    .adv-control1,.row-field
    {
        width:50%;
        float:left ;
        padding-right:20px;
    }
    .left_select
    {
        width:32%;
    }
    .field-content1,.field-content2
    {
        width:68%;
    }
    .noidung_detail
    {
       margin-top:5px;
       border:1px solid #ccc;
    }
     .row-field
    {
      padding-top:10px;
      padding-bottom:10px;
    }
</style>



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
    });


</script>


<script language="javascript" src="dkdn_custom/jquery.validate.min.js"></script>
<script language="javascript" src="dkdn_custom/dkdn.js"></script>

<link href="css/chosen.css" type="text/css" rel="stylesheet" />

<script src="js/chosen.jquery.js"></script>


<link href="css/multiple-select.css" rel="stylesheet"/>

 <script src="js/multiple-select.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
         $('.select_tinh1').change(function(event) {
              var id_tinh=$(this).val();
              $.ajax({
                  type:"POST",
                  url:"ajax/ajax_loadhuyen.php",
                  data:{id_tinh:id_tinh},
                  success:function(data){
                    $('.select_huyen1').html(data);
                     $(".select_huyen1").trigger("chosen:updated");
                  }

              })
          });

          $('.select_huyen1').change(function(event) {
              var id_huyen=$(this).val();
              $.ajax({
                  type:"POST",
                  url:"ajax/ajax_loadxa.php",
                  data:{id_huyen:id_huyen},
                  success:function(data){
                    $('.select_xa1').html(data);
                    $(".select_xa1").trigger("chosen:updated");
                  }

              })

              $.ajax({
                  type:"POST",
                  url:"ajax/ajax_loadduong.php",
                  data:{id_huyen:id_huyen},
                  success:function(data){
                    $('.select_duong1').html(data);
                     $(".select_duong1").trigger("chosen:updated");
                  }

              })
          });
       
    });
   

</script>

<script language="javascript" src="dkdn_custom/jquery.validate.min.js"></script>

<script type="text/javascript">
    
    $(function() {
    $("#frmdangtin").validate({
        rules:{

        },
        messages:{
        tinh:{required:"Bạn chưa chọn tỉnh thành"},
        huyen:{required:"Bạn chưa chọn huyện"},
        xa:{required:"Bạn chưa chọn xã"},
        duong:{required:"Bạn chưa chọn xã"},
        diachi:{required:"Bạn chưa nhập địa chỉ"},
        tinhtrang:{required:"Bạn chưa tình trạng pháp lý"},
        huong:{required:"Bạn chưa chọn hướng nhà"},
        loaihinh:{required:"Bạn chưa chọn loại hình"},
        loaitin:{required:"Bạn chưa chọn loại tin"},
        
        gia:{required:"Bạn chưa nhập giá"},
        loaitin:{required:"Bạn chưa chọn loại tin"},
        tieude:{required:"Bạn chưa nhập tiêu đề"},
        noidung:{required:"Bạn chưa nhập nội dung"},
        hoten:{required:"Bạn chưa nhập họ tên"},
        dienthoai:{required:"Bạn chưa nhập số điện thoại"},
        diachi1:{required:"Bạn chưa nhập địa chỉ liên hệ"},
         captcha:{required:"Bạn chưa nhập mã capcha"}

        }
    });

    $("#captcha").focusout(function(){
      $("#captcha-error").text("");
      $val = $("#captcha").val();
      if($val!=''){
        $.ajax({
          url: 'dkdn_custom/kt_captcha.php',
          type: 'post',
          data: {captcha: $val},
          success:function($rs){
            if($rs==false){
              $("#captcha-error").text('<?=_captchafalse?>');
              $("#captcha-error").show();
              $("#captcha").focus();
            }
          }
        });
      }
    });

     $(".adv-control1 label.error").click(function(event) {$(this).fadeOut();});

     $('#gia').priceFormat({
        limit: 100,
        centsLimit: 0
      });
  });



</script>




<script>
  $(document).ready(function() {
    $('.file_input').filer({
            showThumbs: true,
            templates: {
                box: '<ul class="jFiler-item-list"></ul>',
                item: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li><span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span></li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\<input type="text" name="stthinh[]" class="stthinh" placeholder="Nhập STT" />\
                                </div>\
                            </div>\
                        </li>',
                itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\<input type="text" name="stthinh[]" class="stthinh" placeholder="Nhập STT" />\
                                </div>\
                            </div>\
                        </li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: true,
                removeConfirmation: true,
                _selectors: {
                    list: '.jFiler-item-list',
                    item: '.jFiler-item',
                    progressBar: '.bar',
                    remove: '.jFiler-item-trash-action',
                }
            },
            addMore: true
        });
  });
</script>





<script type="text/javascript">
function getAddress(){
    $str =$("input[name=diachi]").val();

    $xa_id= $("#xa").val();
    if($xa_id){
     $str+=" "+$("#xa option[value='"+$xa_id+"']").html();
    }
    $huyen_id = $("#huyen").val();
    if($huyen_id){
        $str+=" "+$("#huyen option[value='"+$huyen_id+"']").html();
    }
    $tinh_id = $("#tinh").val();
    
    if($tinh_id){
        $str+=" "+$("#tinh option[value='"+$tinh_id+"']").html();

    }

     $xa_id = $("#xa").val();

    if($xa_id){
        $str+=" "+$("#xa option[value='"+$xa_id+"']").html();

    }
   
    geocode($str);

}
$(".wrap-address select,.wrap-address input").change(function(){
    getAddress();
})
    if ($('.content-item-map').is(':visible')) {
        var map;
        var markers;
        var latlngs;
        var gRedIcon = new google.maps.MarkerImage("images/icon_map.png", new google.maps.Size(100, 100), new google.maps.Point(0, 0), new google.maps.Point(15, 45));
        var gSmallShadow = new google.maps.MarkerImage("mm_20_shadow.png", new google.maps.Size(22, 20), new google.maps.Point(0, 0), new google.maps.Point(6, 20));
        var infowindow;
        var geocoder;
        var divThongTin = "<div>Kéo thả nhà đến vị trí mới</div>";

        function initialize() {
            var olat, olng;
            olat = document.getElementById('Latitude').value;
            olng = document.getElementById('Longitude').value;
            if (olat == '' || olat == '0' || olng == '' || olng == '0') {
                olat = 10.77836;
                olng = 106.664468;
            }
            var mapOptions = {
                center: new google.maps.LatLng(olat, olng),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            latlngs = new google.maps.LatLng(olat, olng);
            map = new google.maps.Map(document.getElementById('BanDo2'), mapOptions);
            geocoder = new google.maps.Geocoder();
            var input = document.getElementById('address');
            var autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.bindTo('bounds', map);
            infowindow = new google.maps.InfoWindow();

            var marker = new google.maps.Marker({
                map: map,
                draggable: true,
                icon: gRedIcon
            });
            if ((document.getElementById('Latitude').value != '' &&
             document.getElementById('Latitude').value != '0')
             && (document.getElementById('Longitude').value != ''
             && document.getElementById('Longitude').value != '0')) {
                marker.setPosition(new google.maps.LatLng(olat, olng));
            }
            markers = marker;
            google.maps.event.addListener(marker, 'dragstart', function () {
                var place = map.getCenter();
                updateMarkerPosition(place);

                google.maps.event.addListener(marker, 'drag', function () {
                    updateMarkerPosition(marker.getPosition());
                });

                google.maps.event.addListener(marker, 'dragend', function () {
                    geocodePosition(marker.getPosition());
                });

                marker.setPosition(place);
            });

            google.maps.event.addListener(marker, 'click', function () {
                infowindow.setContent(divThongTin);
                infowindow.open(map, marker);
            });

            google.maps.event.addListener(map, 'click', function (e) {
                geocoder.geocode(
              { 'latLng': e.latLng },
              function (results, status) {
                  if (status == google.maps.GeocoderStatus.OK) {
                      if (results[0]) {
                          if (marker) {
                              marker.setPosition(e.latLng);
                          } else {
                              marker = new google.maps.Marker({
                                  position: e.latLng,
                                  map: map
                              });
                          }
                          //infowindow.setContent(divThongTin);
                          infowindow.open(map, marker);
                          updateMarkerPosition(marker.getPosition());
                          geocodePosition(marker.getPosition());
                          infowindow.setContent(divThongTin);
                      } else {
                          document.getElementById('geocoding').innerHTML =
                        'No results found';
                      }
                  } else {
                      document.getElementById('geocoding').innerHTML =
                      'Geocoder failed due to: ' + status;
                  }
              });
            });
        }

        function geocode(address) {
           
            geocoder.geocode({
                'address': address,
                'partialmatch': true
            }, geocodeResult);
        }

        function geocodeResult(results, status) {
            if (status == 'OK' && results.length > 0) {
                map.fitBounds(results[0].geometry.viewport);
                updateGeocodePosition(results[0].geometry.location); // Update Code Position
                markers.setPosition(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng())); // lat() && lng()
                console.log(results[0].geometry.location);
            } else {
                //alert("Geocode was not successful for the following reason: " + status);
            }
        }

        function geocodePosition(pos) {
            geocoder.geocode({
                latLng: pos
            }, function (responses) {
                if (responses && responses.length > 0) {
                    updateMarkerAddress(responses[0].formatted_address);
                } else {
                    updateMarkerAddress('Cannot determine address at this location.');
                }
            });
        }

        //Update Geocode
        function updateGeocodePosition(latlng) {// lat() && lng()
            document.getElementById('Latitude').value = latlng.lat();
            document.getElementById('Longitude').value = latlng.lng();
            latlngs = latlng;
        }
        //Update Marker Position
        function updateMarkerPosition(latlng) {
            document.getElementById('Latitude').value = latlng.lat();
            document.getElementById('Longitude').value = latlng.lng();
            latlngs = latlng;
        }

        function updateMarkerAddress(str) {
            document.getElementById('address').value = str;
        }
        var markers = new Array();
        function timdiem(diadiems, radiuss) {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(null);
            }
            markers = new Array();
            var request = {
                location: latlngs,
                radius: radiuss,
                types: diadiems
            };
            var service = new google.maps.places.PlacesService(map);
            service.search(request, callback);
        }
        function callback(results, status) {
            if (status == google.maps.places.PlacesServiceStatus.OK) {
                for (var i = 0; i < results.length; i++) {
                    createMarker(results[i]);
                }
            }
        }

        function createMarker(place) {
            var placeLoc = place.geometry.location;
            var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location
            });

            markers[markers.length] = marker;

            google.maps.event.addListener(marker, 'click', function () {
                infowindow.setContent(place.name);
                infowindow.open(map, this);
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    }

$("#button_83").click(function () { 
        address=$(AddressNumber).val();
        $('#address').val(address);
        geocode();
});
</script>

<script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Không có!'},
      '.chosen-select-width'     : {width:"100%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
</script>  


 <script>
       
          $(".select_huong").multipleSelect({
            placeholder: "Hướng nhà"
        });
  </script>