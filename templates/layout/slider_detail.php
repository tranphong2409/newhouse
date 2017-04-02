<script src="sliderengine/amazingslider.js"></script>
<script src="sliderengine/initslider-1.js"></script>

<div style="" class="mawslider">
    <!-- Insert to your webpage where you want to display the slider -->
    <div id="amazingslider-1" style="display:block;position:relative;">
        <ul class="amazingslider-slides" style="display:none;">
        <?php for($i=0;$i<count($hinhanh);$i++){ ?>
            <li><img src="<?=_upload_product_l?><?=$hinhanh[$i]['photo']?>" alt="7" /></li>
        <?php } ?> 
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none;">

        <?php for($i=0;$i<count($hinhanh);$i++){ ?>
            <li><img src="<?=_upload_product_l?>120x60x1/<?=$hinhanh[$i]['thumb']?>" alt="7" /></li>
        <?php } ?> 

        </ul>
    </div>
    <!-- End of body section HTML codes -->
</div>
<div class="clear" style="height:70px;"></div>