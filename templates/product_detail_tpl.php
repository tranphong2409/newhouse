<link href="js/magiczoomplus/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="js/magiczoomplus/magiczoomplus.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function() {

      $('.thanhtoannhanh').click(function(e) {
        var pid = $(this).data('id');
        var soluong = $('.soluong_12').val();
        if(soluong <= 0){
          alert('Bạn chưa chọn số lượng !');
          return false;
        }

        $.ajax({
          type: "POST",
          url: "ajax/add_giohang.php", 
          data: {pid:pid,soluong:soluong},
          success: function(string){
            var getData = $.parseJSON(string);   
            var result = getData.result_giohang;
            var count = getData.count;

            if(result > 0) {  
              $('.giohang_top span').html(count);   
              alert('Bạn đã thêm thành công sản phẩm này vào giỏ hàng');
              //window.location.href="thanh-toan.html";        
            }
            else if (result == -1)alert('Sản phẩm này không tồn tại');
            else if (result == 0)
              { alert('Sản phẩm này đã có trong giỏ hàng'); 
              //window.location.href="thanh-toan.html";      
          }
          }          
        });
      });

  });
</script>

<script language="javascript">
  function addtocart(pid){
    document.form_giohang.productid.value=pid;
    document.form_giohang.command.value='add';
    document.form_giohang.submit();
  }
</script>
<form name="form_giohang" action="index.php" method="post">
  <input type="hidden" name="productid" />
  <input type="hidden" name="command" />
</form>
<script type="text/javascript">
$(document).ready(function(e) {
  $('.owl-sp').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    nav:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:true
        }
    }
  })
});
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $("#content_tab div#tab1,#content_tab div#tab2,#content_tab div#tab3").hide(); // Initially hide all content
    $("#tabs li:first").attr("id","current"); // Activate first tab
    $("#tabs li:first a").attr("class","active");
    $("#content_tab div#tab1").fadeIn(); // Show first tab content

            
    $('#tabs a').click(function(e) {
        e.preventDefault();        
        $("#content_tab div#tab1,#content_tab div#tab2,#content_tab div#tab3").hide();    //Hide all content
        $("#tabs li").attr("id",""); 
        $("#tabs li a").attr("class","");//Reset id's
        $(this).parent().attr("id","current"); 
        $(this).attr("class","active");// Activate this
        $('#' + $(this).attr('title')).fadeIn(); // Show content for current tab
    });

    $('.booknow').click(function(event) {
      $("#tabs li:last").attr("id","current");
      $("#tabs li:last a").attr("class","active");
      $("#tabs li:first").attr("id","");
      $("#tabs li:first a").attr("class","");
      $("#content_tab div#tab1,#content_tab div#tab2,#content_tab div#tab3").hide();
      $("#content_tab div#tab3").fadeIn();
      $('html, body').animate({scrollTop: $("div#tab3").offset().top}, 'slow');
    });

  });
</script>
<?php if($flag!=1){ ?>
  <div id="sanpham">

  <?php include _template."layout/dieuhuong_detail.php"; ?>
  <?php /*<div class="thanh_index"><h2><?=$title_detail?></h2></div>*/ ?>
  <div class="clear" style="height:10px;"></div>
  <?php if(count($product)<=0){ ?>
    <div class="updating"><?=_updatingg?></div>
  <?php }else{ ?>
    
    <div class="clear"></div>
    <?=$paging?>
    <div class="clear" style="height:10px;"></div>
    <div class="flex-sp">
      <?php for($i=0;$i<count($product);$i++){ ?>
        <div class="item_sp">
          <h4><a href="<?=$com?>/<?=$product[$i]['tenkhongdau']?>" title="<?=$product[$i]['ten_'.$lang]?>"><?=$product[$i]['ten_'.$lang]?></a></h4>
          <div class="clear" style="height:8px;"></div>
          <div class="img_sp">
            <a href="<?=$com?>/<?=$product[$i]['tenkhongdau']?>" title="<?=$product[$i]['ten_'.$lang]?>"><img src="<?=_upload_product_l?>117x106x1/<?=$product[$i]['thumb']?>" alt="<?=$product[$i]['ten_'.$lang]?>" onerror="this.src='upload/hinhanh/117x106x1/noimage.png'" /></a>
          </div>
          <div class="info_sp">
            <p class="g"><?php if($product[$i]['giaban']!=0) echo giaca($product[$i]['giaban']); else echo "Liên hệ"; ?></p>
            <p class="ld"><?=get_loaidat_i($product[$i]['id_loaidat'])?></p>
            <p class="dt"><?php if($product[$i]['dientich']!='') echo $product[$i]['dientich']; else echo '---';?></p>
            <p class="pn"><?=get_phongngu($product[$i]['sophong'])?></p>
            <p class="hd"><?=get_huong($product[$i]['id_huong'])?></p>
            <p class="gt"><?=get_giayto($product[$i]['id_phaply'])?></p>
            <p class="dc">
              <?php if($product[$i]['id_quanhuyen']!=0) echo get_quanhuyen($product[$i]['id_quanhuyen']).', '; ?>
              <?php if($product[$i]['id_tinhthanh']!=0){ $mykq= get_tinhthanh('tinh',$product[$i]['id_tinhthanh']); echo $mykq["ten"];} ?>
            </p>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="clear" style="height:10px;"></div>
    <?=$paging?>
  <?php } ?>

<div class="clear" style="height:15px;"></div>
</div>

<h1 class="visit_hidden fn vcard"><?=$row_setting['ten_'.$lang]?></h1>

<?php }else{ ?>

<div id="sanpham">
      <?php include _template."layout/dieuhuong_detail.php"; ?>
      <div class="clear" style="height:10px;"></div>
      <div class="title_detail">
        <h1 class="fn vcard"><?=$row_detail['ten_'.$lang]?></h1>
        <p><?php if($row_detail['giaban']!=0) echo giaca($row_detail['giaban']).' VND'; ?></p>
      </div>
      <div class="clear" style="height:10px;"></div>
      <div class="box_thongtin">
        <div class="content_boxthongtin">
          <div class="box_ttleft">
            <div class="content_bleft">
              <div class="title_bl">Pháp lý</div>
              <div class="nd_bl"><?=get_giayto($row_detail['id_phaply'])?></div>
              <div class="title_bl">Khu vực</div>
              <div class="nd_bl"><?=get_quanhuyen($row_detail['id_quanhuyen'])?></div>
              <div class="title_bl">Hình thức</div>
              <div class="nd_bl"><?=get_loaidat_i($row_detail['id_loaidat'])?></div>
              <div class="title_bl">Hướng</div>
              <div class="nd_bl"><?=get_huong($row_detail['id_huong'])?></div>
              <div class="title_bl">Phòng ngủ</div>
              <div class="nd_bl"><?=get_phongngu($row_detail['sophong'])?></div>
              <div class="title_bl">Phòng tắm</div>
              <div class="nd_bl"><?=get_phongtam($row_detail['phongtam'])?></div>
              <div class="title_bl">Diện tích</div>
              <div class="nd_bl"><?php if($row_detail['dientich']!='') echo $row_detail['dientich']; else echo '---';?></div>
              <div class="title_bl">Số tầng</div>
              <div class="nd_bl"><?php if($row_detail['sotang']!='') echo $row_detail['sotang']; else echo '---';?></div>
              <div class="title_bl">Diện tích sử dụng</div>
              <div class="nd_bl"><?php if($row_detail['dientichsd_vi']!='') echo $row_detail['dientichsd_vi']; else echo '---';?></div>
              <div class="title_bl">Cơ sở vật chất</div>
              <div class="nd_bl"><?php if($row_detail['csvc_vi']!='') echo $row_detail['csvc_vi']; else echo '---';?></div>
              <div class="title_bl" style="border-bottom:1px solid #000;">Thích hợp</div>
              <div class="nd_bl" style="border-bottom:1px solid #000;"><?php if($row_detail['thichhop_vi']!='') echo $row_detail['thichhop_vi']; else echo '---';?></div>
            </div>
          </div>
          <div class="box_ttright">
            <?php include _template."layout/slider_detail.php"; ?>
          </div>
        </div>
      </div>
      <div class="clear" style="height:15px;"></div>
      <?php if($row_detail['toado']!=''){ ?>
      <div class="clear" style="height:20px;"></div>
      <div class="bandochitiet">
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyD5Mevy_rl8U4ZyBB8i5jmdxfvb9Cg5UoE&sensor=false"></script>
        <script>
         function initialize2() {
             var myLatlng = new google.maps.LatLng(<?=$row_detail['toado']?>);
             var mapOptions = {
                 zoom: 17,
                 center: myLatlng
             };

             var map = new google.maps.Map(document.getElementById('map_canvas2'), mapOptions);

             var contentString = "<table style='text-align:left; font-weight:100;'><tr><th style='font-size:16px; color:#039BB2; font-weight:bold; text-transform: uppercase;'><?=$row_detail['ten_'.$lang]?></th></tr><tr><th>Địa chỉ : <?=$row_detail['diachi_'.$lang]?></th></tr><tr><th>Điện thoại : <?=$row_detail['dienthoai']?></th></tr><tr><th>Email : <?=$row_detail['email']?></th></tr></table>";

             var infowindow = new google.maps.InfoWindow({
                 content: contentString
             });

             var marker = new google.maps.Marker({
                 position: myLatlng,
                 map: map,
                 title: "<?=$row_detail['ten_'.$lang]?>"
             });
             //infowindow.open(map, marker);
         }

         google.maps.event.addDomListener(window, 'load', initialize2);


        </script>
        <div id="map_canvas2"></div>
      </div>
      <?php } ?>
      <div class="clear" style="height:20px;"></div>

      <ul id="tabs" class=" wow fadeInUp " data-wow-delay='0.6s'>
        <li><a href="#" title="tab1">Mô tả <?=_chitiet?></a></li>
        <li><a href="#" title="tab2">Hình ảnh clip</a></li>
      </ul>
      <div class="clear"></div>
      <div id="content_tab" class=" wow fadeInUp " data-wow-delay='1s'>
        <div id="tab1">
          <div class="noidung_chitiet">
            <?php if($row_detail['noidung_'.$lang]!=''){ ?>
              <?=$row_detail['noidung_'.$lang]?>
            <?php }else{ ?>
              <div class="updating"><?=_updatingg?></div>
            <?php } ?>
          </div>
        </div>

        <div id="tab2">
          <div class="noidung_chitiet">
            <?php if(count($hinhanh)<=0) { ?>
              <div class="updating">Nội dung đang cập nhật.....</div>
            <?php }else{ ?>
            <?php for($i=0;$i<count($hinhanh);$i++){ ?>
              <img src="<?=_upload_product_l?><?=$hinhanh[$i]['photo']?>" alt="7" />
              <div class="clear" style="height:10px;"></div>
            <?php } } ?> 
          </div>
        </div>

      </div>

      <div class="clear" style="height:35px;"></div>
      <div class="thanh_index"><h2>Bình luận</h2></div><div class="clear" style="height:10px;"></div>
      <div class="clear" style="height:25px;"></div>
      <div class="fb-comments" data-href="<?=getCurrentPageURL()?>" data-width="100%" data-numposts="5"></div>
      
</div>
<?php } ?>