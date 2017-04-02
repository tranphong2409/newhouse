<script language="javascript" src="js/my_script.js"></script>
<script language="javascript">
function js_submit12(){
	if(isEmpty(document.getElementById('ten'), "Xin nhập Họ tên.")){
		document.getElementById('ten').focus();
		return false;
	}
	if(isEmpty(document.getElementById('diachi'), "Xin nhập Địa Chỉ.")){
		document.getElementById('diachi').focus();
		return false;
	}
	
	if(isEmpty(document.getElementById('dienthoai'), "Xin nhập Số điện thoại.")){
		document.getElementById('dienthoai').focus();
		return false;
	}
	
	if(!isNumber(document.getElementById('dienthoai'), "Số điện thoại không hợp lệ.")){
		document.getElementById('dienthoai').focus();
		return false;
	}
	
	if(!check_email(document.frm.email.value)){
		alert("Email không hợp lệ");
		document.frm.email.focus();
		return false;
	}
	
	if(isEmpty(document.getElementById('tieude'), "Xin nhập Chủ đề.")){
		document.getElementById('tieude').focus();
		return false;
	}
	
	if(isEmpty(document.getElementById('noidung'), "Xin nhập Nội dung.")){
		document.getElementById('noidung').focus();
		return false;
	}
	
	document.frm.submit();
}
</script>
<div id="sanpham">

<div class="thanh_index"><h2><?=_lienhe?></h2></div><div class="clear" style="height:10px;"></div>
   <div class="khung_trai">

		<div class="form_contact col-lg-6 col-md-6 col-sm-12 col-xs-12 col-xx-12 wow fadeInRight " data-wow-delay='0.7s'>
			<p><?=$row_detail['noidung_'.$lang]?></p>
		</div>
		<div class="form_lh col-lg-6 col-md-6 col-sm-12 col-xs-12 col-xx-12 wow fadeInLeft " data-wow-delay='0.7s' style="width:45%;float:left;">
			<form method="post" name="frm" action="lien-he.html" enctype="multipart/form-data">
			<fieldset>
				<p style="font-style:italic;color:#f00;">(*) - <?=_nhungmucphainhap?></p>
		        <p><label></label><input name="ten" type="text" class="tflienhe" id="ten" placeholder="<?=_hovaten?> (*)" /></p>
		        <p><label></label><input name="diachi" type="text"  class="tflienhe" id="diachi" placeholder="<?=_address?> (*)"/></p>
				<p><label></label> <input name="dienthoai" type="text" class="tflienhe" id="dienthoai" placeholder="<?=_dienthoai?> (*)"/></p>
				<p><label></label><input name="email" type="text" class="tflienhe" id="email" placeholder="Email (*)" /></p>
				<p><label></label><input name="tieude" type="text" class="tflienhe" id="tieude" placeholder="<?=_tieude?> (*)"/></p>
				<?php /*<p><label><?=_dinhkemfile?> : </label><input name="file" type="file" class="contact-file-input" /></p>*/ ?>
				<p><label></label>
				<textarea name="noidung" style="width:100%;height:100px;" class="ta_noidung" id="noidung" style="background-color:#FFFFFF; color:#666666;" placeholder="<?=_noidung?> (*)"></textarea>
				</p>
		        <p><label>&nbsp; </label>
		            <button type="button" onclick="js_submit12();"><?=_gui?></button>
		            <button type="reset"><?=_nhaplai?></button>   
		        </p> 
		        </fieldset>              
		    </form>
		</div>

    </div>
    <div class="clear" style="height:20px"></div>
	<div class="khung_phai wow fadeInUp " data-wow-delay='0.7s'>
		
      	<script>
              function initialize() {
                  var myLatlng = new google.maps.LatLng(<?=$row_setting['toado']?>);
                  var mapOptions = {
                      zoom: 17,
                      center: myLatlng
                  };

                  var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

                  var contentString = "<table style='text-align:left; font-weight:100;'><tr><th style='font-size:16px; color:#039BB2; font-weight:bold; text-transform: uppercase;'><?=$row_setting['ten_'.$lang]?></th></tr><tr><th><?=_diachi?> : <?=$row_setting['diachi_'.$lang]?></th></tr><tr><th>Hotline : <?=$row_setting['hotline']?></th></tr><tr><th>Email : <?=$row_setting['email']?></th></tr></table>";

                  var infowindow = new google.maps.InfoWindow({
                      content: contentString
                  });

                  var marker = new google.maps.Marker({
                      position: myLatlng,
                      map: map,
                      title: "<?=$row_setting['ten_'.$lang]?>"
                  });
                  infowindow.open(map, marker);
              }

              google.maps.event.addDomListener(window, 'load', initialize);


          </script>
           <div id="map_canvas"></div>
    </div>
<div class="clear" style="height:20px;"></div>

</div>
<h1 class="visit_hidden fn vcard"><?=$row_setting['ten_'.$lang]?></h1>