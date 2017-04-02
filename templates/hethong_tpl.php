<script type="text/javascript">
   
        $(document).ready(function(e) {
        $('.bando_frm').click(function(e) {
            var giatri = $(this).attr('title');
            $('.bando_frm').removeClass('le');
            $(this).addClass('le')
            if(giatri!=''){
                moveToMaker(giatri);
            }
        });
    });
    
</script>
<div id="sanpham">    
      <div class="title_tt"><h2><?=_hethongcuahang?></h2></div>
      <div class="tongcuahang">
        <?php for($i=0;$i<count($row_hethong);$i++){ ?>
          <div class="item_ht bando_frm" title="789<?=$i?>">
            <?=$row_hethong[$i]['ten_'.$lang]?>
            <?=$row_hethong[$i]['noidung_'.$lang]?>
          </div>
          <div class="clear" style="height:10px;"></div>
        <?php } ?>
      </div>
      <div>
      <div class="bando">         
        
            
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyAmtm5XL4qL8zyjf6lGxz6-9hkeu45-UiI"></script>
            <script type="text/javascript">
            var map;
            var infowindow;
            var marker= new Array();
            var old_id= 0;
            var infoWindowArray= new Array();
            var infowindow_array= new Array();function initialize(){
               var defaultLatLng = new google.maps.LatLng(<?=$tintuc[0]['toado']?>);
               var myOptions= {
                   zoom: 6,
                   center: defaultLatLng,
                   scrollwheel : false,
                   mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);map.setCenter(defaultLatLng);   
                var image = 'images/logo.png';
                var arrLatLng = new google.maps.LatLng(<?=$tintuc[0]['toado']?>);
               infoWindowArray[7889] = "<div class='map_description'><div class='map_title'><?=$tintuc[0]['ten_'.$lang]?></div><div><span style='color: #1e2428; font-weight:bold;'><?=$tintuc[0]['diachi_'.$lang]?></span></div></div>";
                loadMarker(arrLatLng, infoWindowArray[7889], 7889); 
                
                <?php for($i=1;$i<count($tintuc);$i++){?>      
               var arrLatLng = new google.maps.LatLng(<?=$tintuc[$i]['toado']?>);
               infoWindowArray[789<?=$i?>] = "<div class='map_description'><div class='map_title'><?=$tintuc[$i]['ten_'.$lang]?></div><div><span style='color: #1e2428; font-weight:bold;'><?=$tintuc[$i]['diachi_'.$lang]?></span></div></div>";
               loadMarker(arrLatLng, infoWindowArray[789<?=$i?>], 789<?=$i?>);
               <?php }?>
               moveToMaker(7889);}function loadMarker(myLocation, myInfoWindow, id){marker[id] = new google.maps.Marker({position: myLocation, map: map, visible:true});
               var popup = myInfoWindow;infowindow_array[id] = new google.maps.InfoWindow({ content: popup});google.maps.event.addListener(marker[id], 'mouseover', function() {if (id == old_id) return;if (old_id > 0) infowindow_array[old_id].close();infowindow_array[id].open(map, marker[id]);old_id = id;});google.maps.event.addListener(infowindow_array[id], 'closeclick', function() {old_id = 0;});}function moveToMaker(id){var location = marker[id].position;map.setCenter(location);if (old_id > 0) infowindow_array[old_id].close();infowindow_array[id].open(map, marker[id]);old_id = id;}</script>
           <div id="map_canvas"></div>
           </div><!-- End .bando -->
           </div>
      </div>