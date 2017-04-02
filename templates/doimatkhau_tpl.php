<link rel="stylesheet" type="text/css" href="dkdn_custom/style.css">
<div class="content3">

    <?php include _template."layout/left1.php";?> 

    <div class="right_member">

     <div class="title_right_member">
            <h2>Đổi mật khẩu</h2>
    </div>

    <div class="dkdn_box">
        <form method="post" name="frmdoimatkhau" action="doi-mat-khau" id="frmdoimatkhau" enctype="multipart/form-data">
          <table class="table" cellpadding="0" cellspacing="0">
           <tr>
                <td class="col1">
                 <label><?=_matkhau?> : </label>
                </td>
                <td class="col2">
                  <div class="box_input hover_box">
                   <i class="fa fa-key"></i>
                    <input name="password" type="password" id="password" class="input hover_box" value="<?=$_POST["password"]?>" required minlength="6" placeholder="<?=_matkhau?>" class="input"/>
                  </div>
                  <!-- <label id="password-error" class="error" for="password"></label> -->
               </td>
               <td class="col3"> <?=_hon6kytu?></td>
           </tr>
            <tr>
                <td class="col1">
                   <label><?=_nhap._matkhau._moi?> : </label>
                </td>
                <td class="col2">
                  <div class="box_input hover_box">
                   <i class="fa fa-key"></i>
                    <input name="password2" type="password" id="password2" class="input hover_box" required minlength="6" placeholder="<?=_nhap._matkhau._moi?>" class="input"/>
                  </div>
                  <!-- <label id="password2-error" class="error" for="password2"></label> -->
                </td>
                <td class="col3"> <?=_hon6kytu?></td>
           </tr>
           <tr>
                <td class="col1">
                  <label><?=_nhaplaimatkhau?> : </label>
                 </td>
                 <td class="col2">
                    <div class="box_input hover_box">
                      <i class="fa fa-random"></i>
                      <input type="password" name="re_password" class="input hover_box" required minlength="6" placeholder="<?=_nhaplaimatkhau?>" class="input" />
                    </div>
                   <!--  <label id="re_password-error" class="error" for="re_password"></label> -->
                 </td>
                 <td class="col3">
                      <?=_hon6kytu?>
                 </td>
           </tr>
           
         <tr>
           <td class="col1"></td>
           <td class="col2">
            <label>
             <?=_neuquenmatkhau?> <a  href="quen-mat-khau"><?=_day?>!</a>
             </label>
           </td>
           <td class="col3"></td>
         </tr>
            <tr>
               <td class="col1">
              </td>
              <td class="col2">
                  <input  type="submit" class="button" value="<?=_doimatkhau?>"/>
                  <input  type="reset" class="button" value="<?=_nhaplai?>"  />    
             </td>
             <td class="col3">
                 
             </td>
           </tr>
          </table>
          
            
      </form>
    </div><!-- dkdn_box -->
  </div>
</div>

<script language="javascript" src="dkdn_custom/jquery.validate.js"></script>
<script language="javascript" src="dkdn_custom/dkdn.js"></script>
<script type="text/javascript">
$(function() {
  $("#frmdoimatkhau").validate({
        rules:{
          re_password:{equalTo:"#password2"}
        },
        messages:{
        password:{required:"<?=_nhap._matkhau?>",minlength:"<?=_hon6kytu?>"},
        password2:{required:"<?=_nhap._matkhau._moi?>",minlength:"<?=_hon6kytu?>"},
        re_password:{required:"<?=_nhaplaimatkhau?>",minlength:"<?=_hon6kytu?>!",equalTo:"<?=_nhaplaimatkhau._sai?>"},
        captcha:{required:"<?=_nhap?> <?=_captcha?>!"}
        }
    });
});
</script>