<?php
    $thanhvien=get_info_tv1($_SESSION['login_web']['id']);
?>

<div class="left_member">
    <div class="title_member">
      <h2>Trang cá nhân</h2>
    </div>
    <div class="box_member">
        <div class="images_member">
          <?php if($thanhvien['thumb']=='') { ?>
            <img id="img" width="108" height="108" src="images/no_image_user.png" alt="user">
          <?php } else { ?>
              <img id="img" width="108" height="108" src="<?=_upload_baiviet_l.$thanhvien['thumb']?>" alt="user">
          <?php } ?>
          <p style="padding:5px 0px;color:#005faf">(Click vào hình để đổi hình đại diện)</p>

          <h2><?=$_SESSION['login_web']['hoten']?></h2>
          <p>Loại tài khoản: <span><?php if($thanhvien['taikhoan']==0){  echo "Cá nhân";} else{ echo "Doanh nghiệp"; }?></span></p>
        </div>

        <?php /*?> <div class="clear"></div>

        <div class="userbalance">
            Tài khoản chính:
            <span id="tkc">0</span><br>
            Tài khoản KM1:
            <span id="km1">0</span><br>
            Tài khoản KM2:
            <span id="km2">0</span><br>
        </div>

        <a href="#" class="recharge">Nạp tiền</a> <?php */?>

        <div class="clear"></div>

          <div class="title_member1">
                <h2>Thông tin cá nhân</h2>

          </div>

            <ul class="member">  
                    <li <?php if($_GET['com']=='tai-khoan') echo "class='active'" ?>><i class="fa fa-circle" aria-hidden="true"></i><a href="tai-khoan">Thay đổi thông tin cá nhân</a></li>
                    <li <?php if($_GET['com']=='doi-mat-khau') echo "class='active'" ?>><i class="fa fa-circle" aria-hidden="true"></i><a href="doi-mat-khau">Thay đổi mật khẩu</a></li>
                   
                    <li <?php if($_GET['com']=='dang-xuat') echo "class='active'" ?>><i class="fa fa-circle" aria-hidden="true"></i><a href="dang-xuat">Đăng xuất</a></li>
            </ul>

            <div class="clear"></div>

          <div class="title_member1">
                <h2>Quản lý tin đăng</h2>

          </div>

            <ul class="member">  
                    
                    <li <?php if($_GET['com']=='tin-dang' || $_GET['com']=='trang-ca-nhan' ) echo "class='active'" ?>><i class="fa fa-circle" aria-hidden="true"></i><a href="trang-ca-nhan">Quản lý đăng tin</a></li>

                     <li <?php if($_GET['com']=='dang-tin-bds' && $loaihinh=='nhaban' ) echo "class='active'" ?>><i class="fa fa-circle" aria-hidden="true"></i><a href="dang-tin-bds/nhaban">Đăng tin nhà đất bán</a></li>
                     <li <?php if($_GET['com']=='dang-tin-bds' && $loaihinh=='duan' ) echo "class='active'" ?>><i class="fa fa-circle" aria-hidden="true"></i><a href="dang-tin-bds/duan">Đăng tin dự án</a></li>
                     <li <?php if($_GET['com']=='dang-tin-bds' && $loaihinh=='chothue' ) echo "class='active'" ?>><i class="fa fa-circle" aria-hidden="true"></i><a href="dang-tin-bds/chothue">Đăng tin cho thuê</a></li>
                  
            </ul>

          <div class="clear"></div>

            <?php /*?>  <div class="title_member1">
              <h2>Quản lý tài chính</h2>

          </div>

          <ul class="member">  
                  <li><i class="fa fa-circle" aria-hidden="true"></i><a href="#">Thông tin số dư</a></li>
                  <li><i class="fa fa-circle" aria-hidden="true"></i><a href="#">Lịch sử giao dịch</a></li>
                  <li><i class="fa fa-circle" aria-hidden="true"></i><a href="#">Quản lý nhóm khuyến mãi</a></li>
                 
                  <li><i class="fa fa-circle" aria-hidden="true"></i><a href="#">Nạp tiền vào tài khoản</a></li>
          </ul> <?php */?>


     </div>
</div>



<form action="" method="POST" accept-charset="utf-8" id="form-data">
    <input type='file' id="fileimg" name="file" class="input_file" />
    <input type='hidden' value="<?=$thanhvien['id']?>"  name="id_input" class="input_file" />
</form>


<script type="text/javascript">
    
    function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
  }

  $(document).ready(function() {
      $('.images_member img').click(function(event) {
          $('#fileimg').click();
      });

       $("#fileimg").change(function(){
          readURL(this);

           $.ajax({
            url: 'ajax/ajax_images.php',
            type: 'POST',
            data: new FormData($('#form-data')[0]),
             contentType: false,      
            cache: false,           
            processData:false,
            success:function(data){
             
            }
          });

        });


  });

 

</script>

