<script src="administrator/ckeditor/ckeditor.js"></script>

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

<link rel="stylesheet" type="text/css" href="dkdn_custom/style.css">
<div class="content3">


<?php include _template."layout/left1.php";?> 

<div class="right_member">
  <div class="update">
        <div class="title_right_member">
            <h2>Cập nhật thông tin</h2>
        </div>

        <div class="clear"></div>

         <form method="post" name="frmthongtin" action="tai-khoan" id="frmthongtin" enctype="multipart/form-data">

             <div class="title_info">
              <?php if($info_tv['taikhoan']==0) { ?>
                <h2>Thông tin cá nhân</h2>
              <?php } else { ?>
                  <h2>Thông tin doanh nghiệp</h2>
              <?php } ?>
            </div>
            <div class="clear"></div>
            <div class="noidung_detail">
                  <div class="row-field">
                    <?php if($_SESSION['login_web']['loai']!=1)
                    { ?>

                      <div class="field-title">
                          Tên đăng nhập <span class="t_red">(*)</span>
                      </div>
                      <div class="field-content">
                          <div>
                               <input readonly type="text" name="username" id="username_kt" class="input " value="<?=$info_tv['username']?>" required minlength="6"  class="input" />  
                          </div>
                         <label id="username_kt-error" class="error" for="username_kt"></label>
                      </div>


                    <?php } ?>

                      
                  </div>



                 <!--  <div class="row-field">
                      <div class="field-title">
                          Mật khẩu <span class="t_red">(*)</span>
                      </div>
                      <div class="field-content">
                          <input name="password" type="password" id="password" class="input hover_box" required minlength="6" class="input"/>
                         <label id="password-error" class="error" for="password"></label>
                      </div>
                  </div> -->

                  <div class="row-field">
                      <div class="field-title">
                          Địa chỉ email <span class="t_red">(*)</span>
                      </div>
                      <div class="field-content">
                          <input readonly type="email" name="email" class="input hover_box" id="email_kt" value="<?=($_POST['email']=='')?$info_tv['email']:$_POST['email']?>" required  class="input" />
                          <label id="email_kt-error" class="error" for="email_kt"></label>
                      </div>
                  </div>
                  <div class="row-field">
                      <div class="field-title">
                          Tên đầy đủ <span class="t_red">(*)</span>
                      </div>
                      <div class="field-content">
                           <input type="text" name="hoten" class="input hover_box" value="<?=($_POST['hoten']=='')?$info_tv['hoten']:$_POST['hoten']?>" required  class="input"/>
                           <label id="hoten-error" class="error" for="hoten"></label>
                      </div>
                  </div>

                  <?php if($info_tv['taikhoan']==0) { ?>
                  <div class="row-field">
                      <div class="field-title">
                          Bí danh
                      </div>
                      <div class="field-content">
                          <input name="bidanh" type="text" maxlength="50" value="<?=($_POST['bidanh']=='')?$info_tv['bidanh']:$_POST['bidanh']?>" id="txtManualName">
                      </div>
                  </div>
                  <div class="row-field">
                      <div class="field-title">
                          Ngày sinh
                      </div>
                      <div class="field-content">
                          <input name="ngaysinh" type="text" id="datepicker22" value="<?=($_POST['ngaysinh']=='')?$info_tv['ngaysinh']:$_POST['ngaysinh']?>" >
                          <label id="ngaysinh-error" class="error" for="ngaysinh" ></label>
                      </div>
                  </div>
                  <div class="row-field">
                      <div class="field-title">
                          Giới tính
                      </div>
                      <div class="field-content" style="margin: 8px 0 3px 0;">
                          <input id="MainContent__register_rdMale" type="radio" name="gioitinh" value="0" <?php if($info_tv['gioitinh']==0) echo "checked ='checked'" ?>><label for="MainContent__register_rdMale"> Nam</label>&nbsp;&nbsp;
                          <input id="MainContent__register_rdFemale" type="radio" name="gioitinh" value="1" <?php if($info_tv['gioitinh']==1) echo "checked ='checked'" ?>><label for="MainContent__register_rdFemale"> Nữ</label>
                      </div>
                  </div>
                  <div class="row-field">
                      <div class="field-title">
                          Địa chỉ
                      </div>
                      <div class="field-content">
                          <div class="adv-control">
                          <select name="tinh" class="select select_tinh" data-type="huyen" data-child="huyen" >
                             <option value="">--Chọn Tỉnh/Thành--</option>  
                                 <?php 
                                    $tinh = get_tinhthanh("tinh");
                                    for ($i=0,$c=count($tinh); $i < $c; $i++) { ?>
                                    <option <?php if($info_tv['id_tinh']==$tinh[$i]['id']) echo "selected='selected'" ?> value="<?=$tinh[$i]["id"]?>"><?=$tinh[$i]["ten"]?></option>
                                <?php }?>   
                          </select>
                          
                          </div>
                          <div class="adv-control">
                            <?php if($info_tv['id_huyen']==0) { ?>
                              <select name="huyen" id="huyen" class="select select_huyen" data-type="xa" data-child="xa" >
                                   <option  value="">--Chọn Quận/Huyện--</option>
                              </select>
                            <?php } else { ?>
                               <select name="huyen" id="huyen" class="select select_huyen"  >
                                    <?php 
                                        $huyen = get_tinhthanh("huyen");
                                        for ($i=0,$b=count($huyen); $i < $b; $i++) { ?>
                                        <option <?php if($info_tv['id_huyen']==$huyen[$i]['id']) echo "selected='selected'" ?> value="<?=$huyen[$i]["id"]?>"><?=$huyen[$i]["ten"]?></option>
                                    <?php } ?> 
                                </select>
                            <?php } ?>

                          </div>
                          <div class="adv-control">
                            <?php if($info_tv['id_huyen']==0) { ?>
                              <select name="xa" id="xa" class="select_xa" >
                                <option value="">--Chọn xã--</option>
                              </select>  
                            <?php } else { ?>
                                <select name="xa" id="xa" class="select_xa" >
                                       <?php 
                                          $d->reset();
                                         $sql = "select ten,id from #_xa where id='".$info_tv['id_xa']."' ";
                                          $d->query($sql);
                                          $xa = $d->fetch_array();

                                        ?>
                                      <option  value="<?=$info_tv['id_xa']?>"><?=$xa['ten']?></option>

                                </select>   
                            <?php } ?>
                        
                          </div>
                      </div>
                  </div>

                   
                  <div class="clear"></div>
               

                  <div class="row-field">
                      <div class="field-title">
                         <span>Mô tả</span>
                      </div>
                      <div class="field-content">
                           <textarea name="mota" rows="5" cols="20" id="mota">
                                  
                               <?=($_POST['mota']=='')?$info_tv['mota']:$_POST['mota']?>

                              </textarea>
                      </div>
                  </div>


                  <?php } else { ?>

                    <div class="row-field">
                      <div class="field-title">
                          Tên giao dịch
                      </div>
                      <div class="field-content">
                          <input name="tengiaodich" type="text" maxlength="50" value="<?=($_POST['tengiaodich']=='')?$info_tv['tengiaodich']:$_POST['tengiaodich']?>" >
                      </div>
                    </div>

                    <div class="row-field">
                      <div class="field-title">
                         Ngày thành lập
                      </div>
                      <div class="field-content">
                          <input name="ngaythanhlap" type="text" maxlength="50" id="datepicker22" value="<?=($_POST['ngaythanhlap']=='')?$info_tv['ngaythanhlap']:$_POST['ngaythanhlap']?>" >
                      </div>
                    </div>

                    <div class="row-field">
                      <div class="field-title">
                          Khu vực hoạt động
                      </div>
                      <div class="field-content">
                          <input name="khuvuchd" type="text" maxlength="50" value="<?=($_POST['khuvuchd']=='')?$info_tv['khuvuchd']:$_POST['khuvuchd']?>" >
                      </div>
                    </div>

                      <div class="row-field">
                      <div class="field-title">
                          Lĩnh vực hoạt động
                      </div>
                      <div class="field-content">
                          <?php $loainhadat_tk=get_loainhadat() ?>

                            <select name="linhvuc" id="linhvuc" class="select select_linhvuc"  >
                             <option value="">Lĩnh vực hoạt động</option>
                                    <?php 
                                       
                                        for ($i=0,$c=count($loainhadat_tk); $i < $c; $i++) { ?>
                                        <option <?php if($info_tv['id_loaitin']==$loainhadat_tk[$i]['id']) echo "selected='selected'" ?> value="<?=$loainhadat_tk[$i]["id"]?>"><?=$loainhadat_tk[$i]["ten_vi"]?></option>
                                    <?php } ?> 
                            </select>
                      </div>
                    </div>

                     <div class="row-field">
                      <div class="field-title">
                          Loại hình
                      </div>
                      <div class="field-content">
                        
                            <select name="loaihinh_tk" id="loaihinh_tk" class="select select_loaihinh_tk"  >
                                  
                                <option <?php if($info_tv['id_loaihinh']==0) echo "selected='selected'" ?> value="0">Phân phối</option>

                                 <option <?php if($info_tv['id_loaihinh']==1) echo "selected='selected'" ?> value="1">Kinh doanh</option>
                               
                            </select>
                      </div>
                    </div>


                  <?php } ?>

            </div>
            <div class="clear"></div>

            <div class="title_info">
                <h2>Thông tin liên hệ</h2>
            </div>
            <div class="clear"></div>
            <div class="noidung_detail">

                    <div class="row-field">
                        <div class="field-title">
                        Khu vực sinh sống <span  class="t_red">(*)</span>
                        </div>
                        <div class="field-content">
                            <input name="khuvuc" type="text" required value="<?=($_POST['khuvuc']=='')?$info_tv['diachi']:$_POST['khuvuc']?>" id="khuvuc">
                        </div>
                    </div>
                <!--     <div class="row-field">
                        <div class="field-title">
                            Điện thoại cố định
                        </div>
                        <div class="field-content">
                            <input name="dienthoaiban" type="text" required  maxlength="11" id="dienthoaiban" value="<?=($_POST['dienthoaiban']=='')?$info_tv['dienthoaiban']:$_POST['dienthoaiban']?>">
                            <label id="dienthoaiban-error" class="error" for="dienthoaiban" ></label>

                        </div>
                    </div> -->
                    <div class="row-field">
                        <div class="field-title">
                            Điện thoại <span class="t_red">(*)</span>

                        </div>
                        <div class="field-content">
                            <input name="dienthoai" type="text" required minlength="10"  maxlength="11" id="dienthoai" value="<?=($_POST['dienthoai']=='')?$info_tv['dienthoai']:$_POST['dienthoai']?>">
                             <!-- <label id="dienthoai-error" class="error" for="dienthoai" ></label> -->
                        </div>
                    </div>

                  <?php if($info_tv['taikhoan']==0) { ?>
                    <div class="row-field">
                        <div class="field-title">
                            Yahoo IM
                        </div>
                        <div class="field-content">
                            <input name="yahoo" type="text" maxlength="50" id="txtYahooIM" value="<?=($_POST['yahoo']=='')?$info_tv['yahoo']:$_POST['yahoo']?>">
                        </div>
                    </div>
                    <div class="row-field">
                        <div class="field-title">
                            Skype
                        </div>
                        <div class="field-content">
                            <input name="skype" type="text" maxlength="50" id="txtSkypeIM" value="<?=($_POST['skype']=='')?$info_tv['skype']:$_POST['skype']?>">
                        </div>
                    </div>
                  <?php } else { ?>

                    <div class="row-field">
                        <div class="field-title">
                            Fax
                        </div>
                        <div class="field-content">
                            <input name="fax" type="text" maxlength="50" id="fax" value="<?=($_POST['fax']=='')?$info_tv['fax']:$_POST['fax']?>">
                        </div>
                    </div>
                    <div class="row-field">
                        <div class="field-title">
                            Mã số thuế
                        </div>
                        <div class="field-content">
                            <input name="maso" type="text" maxlength="50" id="maso" value="<?=($_POST['maso']=='')?$info_tv['maso']:$_POST['maso']?>">
                        </div>
                    </div>

                    <div class="row-field">
                        <div class="field-title">
                           Website
                        </div>
                        <div class="field-content">
                            <input name="website" type="text" maxlength="50" id="website" value="<?=($_POST['website']=='')?$info_tv['website']:$_POST['website']?>">
                        </div>
                    </div>

                    <div class="row-field">
                        <div class="field-title">
                            Skype
                        </div>
                        <div class="field-content">
                            <input name="skype" type="text" maxlength="50" id="txtSkypeIM" value="<?=($_POST['skype']=='')?$info_tv['skype']:$_POST['skype']?>">
                        </div>
                    </div>

                    <div class="row-field">
                        <div class="field-title">
                            Facebook
                        </div>
                        <div class="field-content">
                            <input name="facebook" type="text" maxlength="50" id="facebook" value="<?=($_POST['facebook']=='')?$info_tv['facebook']:$_POST['facebook']?>">
                        </div>
                    </div>

                  <?php } ?>
            </div>
            <div class="clear"></div>

            <div class="title_info">
              <?php if($info_tv['taikhoan']==0) { ?>
                <h2>Giới thiệu cá nhân</h2>
              <?php } else { ?>
                  <h2>Giới thiệu doanh nghiệp</h2>
              <?php } ?>
            </div>
            <div class="clear"></div>
            <div class="noidung_detail">
                <div class="row-field">
                  
                    <div class="noidung_tk ck_editor">
                        <textarea name="noidung" rows="5" cols="20" id="ck_editor">
                            
                         <?=($_POST['noidung']=='')?$info_tv['noidung']:$_POST['noidung']?>

                        </textarea>
                    </div>
                </div>
            </div>

            <div class="clear"></div>
            
            <!-- <div class="row-field" style="margin: 8px 0 3px 0">
                <div class="field-title">
                    Loại tài khoản
                </div>
                <div class="field-content">
                    <input id="MainContent__register_rdPersonal" type="radio" name="taikhoan" value="0" <?php if($info_tv['taikhoan']==0) echo "checked='checked'" ?>><label for="MainContent__register_rdPersonal"> Cá nhân</label>&nbsp;&nbsp;
                    <input id="MainContent__register_rdEnterprise" type="radio" name="taikhoan" value="1" <?php if($info_tv['taikhoan']==1) echo "checked='checked'" ?>><label for="MainContent__register_rdEnterprise"> Doanh nghiệp</label>
                    <br>
                    
                </div>
            </div> -->
           <!--  <div class="row-field">
                <div class="field-title">
                    Xác thực mã an toàn <span class="t_red">(*)</span>
                </div>
                <div class="field-content">
                    <div class="captcha-content">
                       
                         <img class="img_capcha" style="float:left;" src="dkdn_custom/captcha.php"  class="captcha " id="img_capcha"/>

                         <div class="capcha_img"> </div>

                            <div class="clear"></div>
              
                        <div class="box_input ">
                        
                          <input type="text" name="captcha" id="captcha" required placeholder="<?=_nhapmanhuhinh?>" class="input hover_box"/>
                        </div>
                        <label id="captcha-error" class="error" for="captcha"></label> 
                        <label id="msg_capcha"></label>


                        <div style="color: #717171;margin-top:10px;">
                            (Mã an toàn có phân biệt chữ hoa, chữ thường. Trong trường hợp hiện ra thông báo "Mã an toàn bạn nhập vào chưa đúng" bạn vui lòng nhấn vào nút
                        <img width="15px" src="http://file4.batdongsan.com.vn/images/Home/images/icon-reload.png">
                            để tạo mã an toàn mới và thử lại)
                        </div>
                        <div class="captcha-msg"></div>
                    </div>
                </div>
            </div> -->
            <div class="clear"></div>
         
            <div style="text-align: center">
                <input type="submit"  value="Thay dổi" onclick="return isValid();"  class="button-register">
            </div>

          
        </div>
      </form>
</div>
</div>

<style type="text/css">
    .noidung_detail
    {
      margin-top:10px;
      border-top:1px solid #ccc;
    }
</style>

<script language="javascript" src="dkdn_custom/jquery.validate.min.js"></script>
<script language="javascript" src="dkdn_custom/dkdn.js"></script>

<script type="text/javascript">
$(function() {
  $( "#datepicker22" ).datepicker({dateFormat:'dd-mm-yy'});
});

$(function() {
    $("#frmthongtin").validate({
        rules:{
          re_password:{equalTo:"#password"}
         
         
        },
        messages:{
        id_list:{required:"<?=_chuachon._linhvuckd?>"},
        loaitv:{required:"<?=_chuachon._loaitv?>"},
        quocgia:{required:"<?=_chuachon._quocgia?>"},
        khuvuc:{required:"<?=_chuachon._khuvuc?>"},
        username:{required:"<?=_nhap._tendn?>",minlength:"<?=_hon6kytu?>"},
        password:{required:"<?=_nhap._matkhau?>",minlength:"<?=_hon6kytu?>"},
        re_password:{required:"<?=_nhaplaimatkhau?>",minlength:"<?=_hon6kytu?>!",equalTo:"<?=_nhaplaimatkhau._sai?>"},
        email:{required:"<?=_nhap?> email!",email:"<?=_sai._dinhdang?> email!"},
        hoten:{required:"<?=_nhap?> Họ tên!"},
        captcha:{required:"<?=_nhap?> <?=_captcha?>!"},
        dienthoai: {required:"Nhập số điện thoại",number:"Nhập sai định dạng"},
        khuvuc: {required:"Bạn cần nhập địa chỉ"},

         dienthoaiban: {required:"Nhập số điện thoại",number:"Nhập sai định dạng",minlength:"Nhập ít nhất 10 số"}

        
        }
    });
    //kiem tra email trung
    $("#email_kt").focusout(function(){
      $("#email_kt-error").text("");
      $val = $("#email_kt").val();
      if($val!=''){
        $.ajax({
          url: 'dkdn_custom/kt_email.php',
          type: 'post',
          data: {email: $val},
          success:function($rs){
            if($rs==0){
              $("#email_kt-error").text('<?=_emailfalse?>');
              $("#email_kt-error").show();
              $("#email_kt").focus();
            }
          }
        });
      }
    });
    //kiem tra username trung
    $("#username_kt").focusout(function(){
      $("#username_kt-error").text("");
      $val = $("#username_kt").val();
      if($val!=''){
        $.ajax({
          url: 'dkdn_custom/kt_username.php',
          type: 'post',
          data: {username: $val},
          success:function($rs){
            if($rs==false){
              $("#username_kt-error").text('<?=_usernamefalse?>');
              $("#username_kt-error").show();
              $("#username_kt").focus();
            }
          }
        });
      }
    });
    //kiem tra captcha
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
    
});
</script>

<script type="text/javascript">
    $(document).ready(function() {
         $('.select_tinh').change(function(event) {
              var id_tinh=$(this).val();
              $.ajax({
                  type:"POST",
                  url:"ajax/ajax_loadhuyen.php",
                  data:{id_tinh:id_tinh},
                  success:function(data){
                    $('.select_huyen').html(data);
                  }

              })
          });

          $('.select_huyen').change(function(event) {
              var id_huyen=$(this).val();
              $.ajax({
                  type:"POST",
                  url:"ajax/ajax_loadxa.php",
                  data:{id_huyen:id_huyen},
                  success:function(data){
                    $('.select_xa').html(data);
                  }

              })
          });
       
    });
   

</script>