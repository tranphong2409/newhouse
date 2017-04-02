<script type="text/javascript">
    $(document).ready(function() {
        $('.chonngonngu li a').click(function(event) {
            var lang = $(this).attr('href');
            $('.chonngonngu li a').removeClass('active');
            $(this).addClass('active');
            $('.lang_hidden').removeClass('active');
            $('.lang_'+lang).addClass('active');
            return false;
        });
    });
</script>
<div class="control_frm" style="margin-top:25px;">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
        	            <li><a href="index.php?com=photo&act=man_photo<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span><?=$title_main?></span></a></li>
                                    <li class="current"><a href="#" onclick="return false;">Thêm hình ảnh</a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<script type="text/javascript">		
	function TreeFilterChanged2(){		
				$('#validate').submit();		
	}	
</script>
<form name="supplier" id="validate" class="form" action="index.php?com=photo&act=save_photo<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" method="post" enctype="multipart/form-data">
	<div class="widget">
	   
        <div class="title chonngonngu">
            <ul>
                <li><a href="vi" class="active tipS" title="Chọn tiếng việt "><img src="./images/vi.png" alt="" class="tiengviet" />Tiếng Việt</a></li>
                <li><a href="en" class="tipS" title="Chọn tiếng anh "><img src="./images/en.png" alt="" class="tienganh" />Tiếng Anh</a></li>
            </ul>
        </div>	
		
        <?php for($i=0; $i<1; $i++){?>
        <div class="title"><img src="./images/icons/dark/list.png" alt="" class="titleIcon" />
			<h6>Thêm hình ảnh</h6>
		</div>
        <div class="formRow">
			<label>Tên hình ảnh</label>
			<div class="formRight">
                <input type="text" name="ten_vi<?=$i?>" title="Nhập tên hình ảnh" id="name" class="tipS validate[required]" value="" />
			</div>
			<div class="clear"></div>
		</div>		                     
        
		<div class="formRow">
			<label>Tải hình ảnh:</label>
			<div class="formRight">
            					<input type="file" id="file" name="file<?=$i?>" />
				<img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
                <span class="note">width : <?php echo _width_thumb*$ratio_;?>px  - Height : <?php echo _height_thumb*$ratio_;?>px</span>
			</div>
			<div class="clear"></div>
		</div>
        <?php if($links_=='true'){?>
        <div class="formRow">
            <label>Link liên kết:</label>
            <div class="formRight">
                <input type="text" id="code_pro" name="link<?=$i?>" value=""  title="Nhập link liên kết cho hình ảnh" class="tipS" />
            </div>
            <div class="clear"></div>
        </div>
        <?php }  ?>
        <?php if($config_noidung=='true'){ ?>
        <div class="formRow lang_hidden lang_vi active">
            <label>Nội Dung</label>
            <div class="ck_editor">
                <textarea rows="4" cols="" id="noidung_vi" name="noidung_vi"><?=@$item['noidung_vi']?></textarea>
            </div>
            <div class="clear"></div>
        </div>

        <div class="formRow lang_hidden lang_en">
            <label>Nội Dung (Tiếng anh)</label>
            <div class="ck_editor">
                <textarea rows="4" cols="" id="noidung_en" name="noidung_en"><?=@$item['noidung_en']?></textarea>
            </div>
            <div class="clear"></div>
        </div>
        <?php } ?>
        <div class="formRow">
          <label>Tùy chọn: <img src="./images/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Check vào những tùy chọn "> </label>
          <div class="formRight">           
            <input type="checkbox" name="active<?=$i?>" id="check1" value="1" checked="checked" />
            <label for="check1">Hiển thị</label>           
          </div>
          <div class="clear"></div>
        </div>
        <div class="formRow">
            <label>Số thứ tự: </label>
            <div class="formRight">
                <input type="text" class="tipS" value="1" name="stt<?=$i?>" style="width:20px; text-align:center;" onkeypress="return OnlyNumber(event)" original-title="Số thứ tự của hình ảnh, chỉ nhập số">
            </div>
            <div class="clear"></div>
        </div>
		<?php } ?>
	<div class="formRow">
			<div class="formRight">
            	<input type="hidden" name="type" id="id_this_type" value="<?=$_REQUEST['type']?>" />
            	<input type="button" class="blueB" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
			</div>
			<div class="clear"></div>
		</div>	
	</div>
   
	
</form>   