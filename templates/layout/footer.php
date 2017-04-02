<div id="bottom">
<div class="container">
<div class="content_container bottom">

    <div class="col-lg-3 col-md-3 col-sm-12 col-xx-12 col-xs-12"></div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xx-12 col-xs-12">
        <div id="menu_bottom">
            <ul>
                <li><a href="trang-chu" title="Trang chủ">Trang chủ</a></li>
                <li><a href="gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                <li><a href="dich-vu" title="Dịch vụ">Dịch vụ</a></li>
                <li><a href="kien-thuc" title="Kiến thức">Kiến thức</a></li>
                <li><a href="lien-he" title="Liên hệ">Liên hệ</a></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xx-12 col-xs-12"></div>
    <div class="clear"></div>

    <div class="box_footer">
    	<div class="thongtin_bt">
    		<?=$footer['noidung_'.$lang]?>
            <p>&nbsp;</p>
    		<div class="clear"></div>
    	</div>
    	<div class="khung_facebook">
            <?php include _template."layout/addon/nhantin.php"; ?>
            <div class="clear" style="height:30px;"></div>
            <?php for($i=0;$i<count($lienketw);$i++){ ?>
                <a href="<?=$lienketw[$i]['url']?>" target="_blank" title="<?=$lienketw[$i]['ten']?>"><img src="<?=_upload_hinhanh_l?>30x33x2/<?=$lienketw[$i]['thumb']?>" alt="Liên kết web"/></a>
            <?php } ?>
    	</div>
    	<div class="thongke_m">
    		<?php /*?> <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5Mevy_rl8U4ZyBB8i5jmdxfvb9Cg5UoE&sensor=false&libraries=places"></script> <?php */?> 
           <script>
             function initialize1() {
                 var myLatlng = new google.maps.LatLng(<?=$row_setting['toado']?>);
                 var mapOptions = {
                     zoom: 17,
                     center: myLatlng
                 };

                 var map = new google.maps.Map(document.getElementById('map_canvas1'), mapOptions);

                 var contentString = "<table style='text-align:left; font-weight:100;'><tr><th style='font-size:16px; color:#039BB2; font-weight:bold; text-transform: uppercase;'><?=$row_setting['ten_'.$lang]?></th></tr><tr><th>Địa chỉ : <?=$row_setting['diachi_'.$lang]?></th></tr><tr><th>Điện thoại : <?=$row_setting['dienthoai']?></th></tr><tr><th>Email : <?=$row_setting['email']?></th></tr></table>";

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

             google.maps.event.addDomListener(window, 'load', initialize1);


            </script>
            <div id="map_canvas1"></div>
    	</div>
    </div>
    <div class="clear"></div>
</div>
</div>
</div>