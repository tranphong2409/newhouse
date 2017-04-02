
<?php if($_GET["act"]=="add"){?>
<h3>Thêm Thành Viên</h3>
<?php }else{?>
<h3>Thông Tin Thành Viên</h3>
<?php }?>
<form name="frm" method="post" id="validate" class="form" action="index.php?com=thanhvien&act=save" enctype="multipart/form-data" class="nhaplieu">
	<div class="control_frm" style="margin-top:25px;">
	    <div class="bc">
	        <ul id="breadcrumbs" class="breadcrumbs">
	        	<li class="current"><a href="#" onclick="return false;">Các Thông Tin Bắt Buộc</a></li>
	        </ul>
	        <div class="clear"></div>
	    </div>
	</div>

		 <div class="formRow">


                <label>
                    Hình đại diện(80*80) <span class="t_red">(*)</span>
                </label>
                <div class="formRight">
                     <input type="file" name="file" id='file'   class="input"/> 
                     <div class="clear"></div>


                      <?php if ($_GET['act']='edit') { ?>
                          <img width="80" height="80" style="margin-top:10px;" onerror='this.src="../images/no_image_user.png"' src="<?=_upload_baiviet.$item['thumb']?>" alt="hình đại diên" />
                      <?php } ?>
                </div>
                <div class="clear"></div>
               

          </div>

		<div class="formRow">
			<label>Username</label>
			<div class="formRight">
                <input type="text" name="username" title="Nhập username" id="username" <?php if($_GET["act"]=="add") echo 'validate[required]';?> class="tipS " value="<?=@$item['username']?>" />
			</div>
			<div class="clear"></div>
		</div><!-- formRow -->
		<div class="formRow">
			<label>Password</label>
			<div class="formRight">
                <input type="password" name="password" title="Nhập password" id="password" class="tipS <?php if($_GET["act"]=="add") echo 'validate[required]';?> " value="" />
			</div>
			<div class="clear"></div>
		</div><!-- formRow -->
		<?php if($_GET["act"]=="add"){?>
		<div class="formRow">
			<label>Nhập Lại Password</label>
			<div class="formRight">
                <input type="password" name="repassword" title="Nhập lại password" id="repassword" class="tipS validate[required]" value="" />
			</div>
			<div class="clear"></div>
		</div><!-- formRow -->
		<?php }?>
		<div class="formRow">
			<label>Họ Tên</label>
			<div class="formRight">
                <input type="text" name="hoten" title="Nhập họ tên" id="username" class="tipS validate[required]" value="<?=@$item['hoten']?>" />
			</div>
			<div class="clear"></div>
		</div><!-- formRow -->

		<?php if($item['taikhoan']==1){?>
			<div class="formRow">
				<label>Tên giao dịch</label>
				<div class="formRight">
	                <input type="text" name="tengiaodich" title="Nhập tên giao dịch" id="tengiaodich" class="tipS " value="<?=@$item['hoten']?>" />
				</div>
				<div class="clear"></div>
			</div><!-- formRow -->
		<?php } ?>

		<div class="formRow">
			<label>Email</label>
			<div class="formRight">
                <input type="email" name="email" title="Nhập email" id="email" class="tipS validate[required]" value="<?=@$item['email']?>" />
			</div>
			<div class="clear"></div>
		</div><!-- formRow -->

		<div class="control_frm" style="margin-top:25px;">
		    <div class="bc">
		        <ul id="breadcrumbs" class="breadcrumbs">
		        	<li class="current"><a href="#" onclick="return false;">Các Thông Tin Khác</a></li>
		        </ul>
		        <div class="clear"></div>
		    </div>
		</div>

		<div class="formRow">
			<label>Địa chỉ</label>
			<div class="formRight">
                <input type="text" name="diachi" title="Nhập địa chỉ" id="diachi" class="tipS" value="<?=@$item['diachi']?>" />
			</div>
			<div class="clear"></div>
		</div><!-- formRow -->

		<?php if($item['taikhoan']==0){?>
			<div class="formRow">
				<label>Ngày Sinh</label>
				<div class="formRight">
	                <input type='text' name="ngaysinh" title="Nhập Ngày Sinh" id="datepicker11" class="tipS" value="<?=@$item['ngaysinh']?>" />
				</div>
				<div class="clear"></div>
			</div><!-- formRow -->

			<div class="formRow">
				<label>Mô tả</label>
					<div class="formRight">
		                <textarea rows="4" cols="" title="Nhập mô tả . " class="tipS" id="mota" name="mota"><?=@$item['mota']?></textarea>
					</div>
				<div class="clear"></div>
			</div><!-- formRow -->

		<?php } ?>

		<?php if($item['taikhoan']==1){?>
			<div class="formRow">
				<label>Ngày thành lập</label>
				<div class="formRight">
	                <input type='text' name="ngaythanhlap" title="Nhập thành lập" id="datepicker11" class="tipS" value="<?=@$item['ngaythanhlap']?>" />
				</div>
				<div class="clear"></div>
			</div><!-- formRow -->
		<?php } ?>

		<div class="formRow">
			<label>Điện thoại</label>
			<div class="formRight">
                <input type="text" name="dienthoai" title="Nhập Điện thoại" id="dienthoai" class="tipS" value="<?=@$item['dienthoai']?>" />
			</div>
			<div class="clear"></div>
		</div><!-- formRow -->
		<?php if($item['taikhoan']==0){?>
		<div class="formRow">
			<label>Bí danh</label>
			<div class="formRight">
                <input type="text" name="bidanh" title="Nhập địa chỉ" id="bidanh" class="tipS" value="<?=@$item['bidanh']?>" />
			</div>
			<div class="clear"></div>
		</div><!-- formRow -->

		<?php } ?>


		   <div class="formRow">
              	<label>Giới tính</label>
                <div class="formRight">
                    <input id="MainContent__register_rdMale" type="radio" name="gioitinh" value="0" <?php if($item['gioitinh']==0) echo "checked ='checked'" ?>><label for="MainContent__register_rdMale"> Nam</label>&nbsp;&nbsp;
                    <input id="MainContent__register_rdFemale" type="radio" name="gioitinh" value="1" <?php if($item['gioitinh']==1) echo "checked ='checked'" ?>><label for="MainContent__register_rdFemale"> Nữ</label>
                </div>
                <div class="clear"></div>
            </div>

            <div class="formRow">
			<label>Skype</label>
				<div class="formRight">
	                <input type="text" name="skype" title="Nhập skype" id="skype" class="tipS" value="<?=@$item['skype']?>" />
				</div>
					<div class="clear"></div>
			</div><!-- formRow -->

		<?php if($item['taikhoan']==0){?>
			<div class="formRow">
			<label>Yahoo</label>
				<div class="formRight">
	                <input type="text" name="yahoo" title="Nhập yahoo" id="yahoo" class="tipS" value="<?=@$item['yahoo']?>" />
				</div>
					<div class="clear"></div>
			</div><!-- formRow -->
		<?php } ?>

		<div class="formRow">
			<label>Giới Thiệu</label>
			<div class="formRight ck_editor">
                <textarea rows="4" cols="" title="Nhập giới thiệu . " class="tipS" id="noidung" name="noidung"><?=@$item['noidung']?></textarea>
			</div>
			<div class="clear"></div>
		</div>

		 <?php
     // $loainhadat_tk=get_loainhadat() ?>

		<?php if($item['taikhoan']==1){?>

		<div class="formRow">
			<label>Khu vực hoạt động</label>
			<div class="formRight">
                <textarea rows="4" cols="" title="Nhập khu vực hoạt động. " class="tipS" id="khuvuchd" name="khuvuchd"><?=@$item['khuvuchd']?></textarea>
			</div>
			<div class="clear"></div>
		</div>

		<?php /*?> <div class="formRow">
			<label>Lĩnh vực hoạt động</label>
			<div class="formRight">
				<select id="linhvuc" name="linhvuc" class="main_select select_linhvuc">
					 <option value="">Lĩnh vực hoạt động</option>
	                <?php 
	                   
	                    for ($i=0,$c=count($loainhadat_tk); $i < $c; $i++) { ?>
	                    <option <?php if($item['id_loaitin']==$loainhadat_tk[$i]['id']) echo "selected='selected'" ?> value="<?=$loainhadat_tk[$i]["id"]?>"><?=$loainhadat_tk[$i]["ten_vi"]?></option>
	                <?php } ?> 
	            </select>
       		 </div>
       		 <div class="clear"></div>
       	</div> <?php */?>


       	<div class="formRow">
			<label>Loại hình</label>
			<div class="formRight">
				  <select name="loaihinh_tk" id="loaihinh_tk" class="main_select select select_loaihinh_tk"  >
                                  
                                <option <?php if($item['id_loaihinh']==0) echo "selected='selected'" ?> value="0">Phân phối</option>

                                 <option <?php if($item['id_loaihinh']==1) echo "selected='selected'" ?> value="1">Kinh doanh</option>
                               
                   </select>
       		 </div>
       		 <div class="clear"></div>
       	</div>

       	<div class="formRow">
			<label>Fax</label>
				<div class="formRight">
	                <input type="text" name="fax" title="Nhập fax" id="fax" class="tipS" value="<?=@$item['fax']?>" />
				</div>
					<div class="clear"></div>
		</div>

		<div class="formRow">
			<label>Mã số thuế</label>
				<div class="formRight">
	                <input type="text" name="maso" title="Nhập mã số thuế" id="maso" class="tipS" value="<?=@$item['maso']?>" />
				</div>
					<div class="clear"></div>
		</div>

		<div class="formRow">
			<label>Website</label>
				<div class="formRight">
	                <input type="text" name="website" title="Nhập website" id="website" class="tipS" value="<?=@$item['website']?>" />
				</div>
					<div class="clear"></div>
		</div>

		<div class="formRow">
			<label>Facebook</label>
				<div class="formRight">
	                <input type="text" name="facebook" title="Nhập facebook" id="facebook" class="tipS" value="<?=@$item['facebook']?>" />
				</div>
					<div class="clear"></div>
		</div>

	     <?php } ?>

	    <div class="formRow" >
            <div class="field-title">
                Loại tài khoản
            </div>
            <div class="formRight">
                <input id="MainContent__register_rdPersonal" type="radio" name="taikhoan" value="0" <?php if($item['taikhoan']==0) echo "checked='checked'" ?>><label for="MainContent__register_rdPersonal"> Cá nhân</label>&nbsp;&nbsp;
                <input id="MainContent__register_rdEnterprise" type="radio" name="taikhoan" value="1" <?php if($item['taikhoan']==1) echo "checked='checked'" ?>><label for="MainContent__register_rdEnterprise"> Doanh nghiệp</label>
             
                
            </div>
             <div class="clear"></div>
        </div>

		<b>Kích hoạt</b> <input type="checkbox" name="trangthai" <?=(!isset($item['trangthai']) || $item['trangthai']==1)?'checked="checked"':''?>><br />
	
		<div class="formRow">
			<div class="formRight">
                <input type="hidden" name="id" id="id_this_post" value="<?=@$item['id']?>" />
                 <input type="hidden" name="page" id="id_this_cur" value="<?=$_GET['page']?>" />
            	<input type="submit" class="blueB" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
            	<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=thanhvien&act=man'" class="btn" />
          	</div>
			<div class="clear"></div>
		</div>

	
</form>

<script type="text/javascript">
	
	$(function() {
		  $( "#datepicker11" ).datepicker({dateFormat:'dd-mm-yy'});
	});

</script>