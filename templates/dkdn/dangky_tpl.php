<script type="text/javascript">

</script>
<link rel="stylesheet" type="text/css" href="dkdn_custom/style.css">
<div class="content3">


<div id="registerAccount">
        <div id="headerTitle">
            <h2>
                <img width="58" src="images/register1.png">
                Đăng ký thành viên
            </h2>
        </div>

        <div class="clear"></div>

        <div id="accountInfo">
            <div class="colorblue pad-bot-20" style="font-size: 13px;">
                Mời bạn đăng ký thành viên để được hưởng nhiều lợi ích và hỗ trợ từ chúng tôi!
                <p>Phần có dấu (*) là phần bắt buộc nhập.</p>
            </div>
      <form method="post" name="frmdangky" action="dang-ky" id="frmdangky" enctype="multipart/form-data">
            <div class="row-field">
                <div class="field-title">
                    Tên đăng nhập <span class="t_red">(*)</span>
                </div>
                <div class="field-content">
                    <div>
                         <input type="text" name="username" id="username_kt" class="input hover_box" value="<?=$_POST['username']?>" required minlength="6"  class="input" />  
                    </div>
                   <label id="username_kt-error" class="error" for="username_kt"></label> 
                </div>
            </div>
            <div class="row-field">
                <div class="field-title">
                    Mật khẩu <span class="t_red">(*)</span>
                </div>
                <div class="field-content">
                    <input name="password" type="password" id="password" class="input hover_box" required minlength="6" class="input"/>
                  <!--  <label id="password-error" class="error" for="password"></label> -->
                </div>
            </div>
            <div class="row-field">
                <div class="field-title">
                    Gõ lại mật khẩu <span class="t_red">(*)</span>
                </div>
                <div class="field-content">
                     <input type="password" name="re_password" class="input hover_box" required minlength="6"  class="input" />
                      <label id="re_password-error" class="error" for="re_password"></label> 
                </div>
            </div>

        <!--      <div class="row-field">
                <div class="field-title">
                    Hình đại diện(80*80) <span class="t_red">(*)</span>
                </div>
                <div class="field-content">
                     <input type="file" name="file" id='file'   class="input"/>
                </div>
            </div> -->

            <div class="row-field">
                <div class="field-title">
                    Địa chỉ email <span class="t_red">(*)</span>
                </div>
                <div class="field-content">
                    <input type="email" name="email" class="input hover_box" id="email_kt" value="<?=$_POST['email']?>" required  class="input" />
                     <label id="email_kt-error" class="error" for="email_kt"></label>
                </div>
            </div>
            <div class="row-field">
                <div class="field-title">
                    Tên đầy đủ <span class="t_red">(*)</span>
                </div>
                <div class="field-content">
                     <input type="text" name="hoten" placeholder='Nguyễn Văn A' class="input hover_box" value="<?=$_POST['hoten']?>" required  class="input"/>
                     <!-- <label id="hoten-error" class="error" for="hoten"></label> -->
                </div>
            </div>
           <!--  <div class="row-field">
                <div class="field-title">
                    Bí danh
                </div>
                <div class="field-content">
                    <input name="bidanh" type="text" maxlength="50" value="<?=$_POST['bidanh']?>" id="txtManualName">
                </div>
            </div> -->
            <div class="row-field">
                <div class="field-title">
                    Ngày sinh
                </div>
                <div class="field-content">
                    <input name="ngaysinh" type="text" placeholder='dd/mm/YY' class="hover_box" id="datepicker11" value="<?=$_POST['ngaysinh']?>" >
                   <!--  <label id="ngaysinh-error" class="error" for="ngaysinh" ></label> -->
                </div>
            </div>
            <div class="row-field">
                <div class="field-title">
                    Giới tính
                </div>
                <div class="field-content" style="margin: 8px 0 3px 0;">
                    <input id="MainContent__register_rdMale" type="radio" name="gioitinh" value="0" checked="checked"><label for="MainContent__register_rdMale"> Nam</label>&nbsp;&nbsp;
                    <input id="MainContent__register_rdFemale" type="radio" name="gioitinh" value="1"><label for="MainContent__register_rdFemale"> Nữ</label>
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
                              <option value="<?=$tinh[$i]["id"]?>"><?=$tinh[$i]["ten"]?></option>
                          <?php }?>   
                    </select>
                    
                    </div>
                    <div class="adv-control">
                      
                      <select name="huyen" id="huyen" class="select select_huyen" data-type="xa" data-child="xa" >
                        <option value="">--Chọn Quận/Huyện--</option>
                      </select>

                    </div>
                    <div class="adv-control">
                        <select name="xa" id="xa" class="select_xa" >
                          <option value="">--Chọn xã--</option>
                        </select>   
                    
                    </div>
                </div>
            </div>
          <!--   <div class="row-field">
                <div class="field-title">
                    Khu vực sinh sống
                </div>
                <div class="field-content">
                    <input name="khuvuc" type="text" value="<?=$_POST['khuvuc']?>" id="MainContent__register_txtAddress">
                </div>
            </div>
            <div class="row-field">
                <div class="field-title">
                    Điện thoại cố định
                </div>
                <div class="field-content">
                    <input name="dienthoaiban" type="text"  id="dienthoaiban" value="<?=$_POST['dienthoaiban']?>">
                 

                </div>
            </div> -->
            <div class="row-field">
                <div class="field-title">
                    Điện thoại di động <span class="t_red">(*)</span>

                </div>
                <div class="field-content">
                    <input name="dienthoai" type="text" class="hover_box" required minlength="10"  maxlength="11" id="dienthoai" value="<?=$_POST['dienthoai']?>">
                    <!--  <label id="dienthoai-error" class="error" for="dienthoai" ></label> -->
                </div>
            </div>
           <!--  <div class="row-field">
                <div class="field-title">
                    Yahoo IM
                </div>
                <div class="field-content">
                    <input name="yahoo" type="text" maxlength="50" id="txtYahooIM" value="<?=$_POST['yahoo']?>">
                </div>
            </div>
            <div class="row-field">
                <div class="field-title">
                    Skype
                </div>
                <div class="field-content">
                    <input name="skype" type="text" maxlength="50" id="txtSkypeIM" value="<?=$_POST['skype']?>">
                </div>
            </div>
            <div class="row-field">
                <div class="field-title">
                    Giới thiệu bản thân
                </div>
                <div class="field-content">
                    <textarea name="noidung" rows="5" cols="20" id="txtIntrodution"></textarea>
                </div>
            </div> -->
            <div class="row-field" style="margin: 8px 0 3px 0">
                <div class="field-title">
                    Loại tài khoản
                </div>
                <div class="field-content">
                    <input id="MainContent__register_rdPersonal" type="radio" name="taikhoan" value="0" checked="checked"><label for="MainContent__register_rdPersonal"> Cá nhân</label>&nbsp;&nbsp;
                    <input id="MainContent__register_rdEnterprise" type="radio" name="taikhoan" value="1"><label for="MainContent__register_rdEnterprise"> Doanh nghiệp</label>
                    <br>
                    
                </div>
            </div>
            <div class="row-field">
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
                        <!-- <label id="captcha-error" class="error" for="captcha"></label>  -->
                        <label id="msg_capcha"></label>


                        <div style="color: #717171;margin-top:10px;">
                            (Nhấn vào nút
                        <img width="15px" src="images/icon-reload.png">
                            để tạo mã an toàn mới.)
                        </div>
                        <div class="captcha-msg"></div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
         <!--    <div class="colorblue" style="padding-top: 10px;">
                <strong>Chúng tôi sẽ gửi đến hộp thư của bạn 1 email xác nhận đăng ký thành viên sau khi đăng ký thành viên hoàn tất.</strong>
                <br>
                <span>
                    Chú ý: bạn không thể thay đổi những thông tin: tên đăng nhập, email, số điện thoại di động sau khi đăng ký
                </span>
            </div> -->
            <div style="text-align: center">
                <input type="submit"  value="Đăng ký"  class="button-register">
            </div>

           <!--  <div style="margin-top: 20px;" class="color555">
                Nếu gặp bất kỳ khó khăn gì trong việc đăng ký, đăng nhập, đăng tin hay trong việc sử dụng website nói chung, Quý vị hãy liên hệ ngay với chúng tôi theo số đt: <strong><?=$row_setting['hotline']?></strong> hoặc email: <a href="mailto:hotro@batdongsan.com.vn" style="color: #555"><strong><?=$row_setting['email']?></strong></a> để được trợ giúp
            </div> -->

        </div>
      </form>
    </div>

</div>


<script language="javascript" src="dkdn_custom/jquery.validate.js"></script>
<script language="javascript" src="dkdn_custom/dkdn.js"></script>

<script type="text/javascript">



 
$(function() {
  $( "#datepicker11" ).datepicker({dateFormat:'dd-mm-yy'});
});

$(function() {
    $("#frmdangky").validate({
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
        dienthoai: {required:"Nhập số điện thoại",number:"Nhập sai định dạng",minlength:"Nhập ít nhất 10 số"}

      
        
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
              alert('a');
              $("#email_kt-error").text('<?=_emailfalse?>');
              $("#email_kt-error").show();
               $("#email_kt-error").css({
                display: 'block'
               
              });
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
              $("#username_kt-error").css({
                display: 'block'
               
              });
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
               $("#captcha-error").css({
                display: 'block'
               
              });
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