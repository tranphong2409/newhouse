<div id='cssmenu_custom'>
    <ul>

        <li><a href="trang-chu" title="Trang chủ">Trang chủ</a></li>

        <li class="menu_hidden"><a href="gioi-thieu" title="<?=_gioithieu?>"><?=_gioithieu?></a></li>

        <li>
            <a href="nha-dat-ban" title="<?=_nhadatban?>"><?=_nhadatban?></a>
            <div class="box_sub">
            <div class="sub_menu">
                <div class="content_submn">
                <h3>Theo địa điểm</h3>
                    <ul>
                     <?php for($i=0;$i<count($rs_quan);$i++){ ?>
                        <li><a href="nha-dat-ban/<?=$rs_quan[$i]['tenkhongdau']?>" title="<?=$rs_quan[$i]['ten_'.$lang]?>"><?=$rs_quan[$i]['ten_'.$lang]?></a></li>
                    <?php } ?>
                    </ul>
                </div><?//content_submn?>
                <div class="content_submn">
                <h3>Theo loại</h3>
                    <ul>
                    <?php for($i=0;$i<count($rs_loainhaban);$i++){ ?>
                        <li><a href="nha-dat-ban/<?=$rs_loainhaban[$i]['tenkhongdau']?>" title="<?=$rs_loainhaban[$i]['ten_'.$lang]?>"><?=$rs_loainhaban[$i]['ten_'.$lang]?></a></li>
                    <?php } ?>
                    </ul>
                </div><?//content_submn?>
                <div class="content_submn">
                <h3>Theo giá</h3>
                    <ul>
                    <?php for($i=0;$i<count($rs_gianhaban);$i++){ ?>
                        <li><a href="nha-dat-ban/<?=$rs_gianhaban[$i]['tenkhongdau']?>" title="<?=$rs_gianhaban[$i]['ten_'.$lang]?>"><?=$rs_gianhaban[$i]['ten_'.$lang]?></a></li>
                    <?php } ?>
                    </ul>
                </div><?//content_submn?>
            </div><?//sub_menu?>
            </div><?//box_sub?>
        </li>

        <li>
            <a href="cho-thue" title="Nhà đất cho thuê">Nhà Đất Cho thuê</a>
            <div class="box_sub">
                <div class="sub_menu">
                    <div class="content_submn">
                        <h3>Theo địa điểm</h3>
                        <ul>
                            <?php for($i=0;$i<count($rs_quan);$i++){ ?>
                                <li><a href="cho-thue/<?=$rs_quan[$i]['tenkhongdau']?>" title="<?=$rs_quan[$i]['ten_'.$lang]?>"><?=$rs_quan[$i]['ten_'.$lang]?></a></li>
                            <?php } ?>
                        </ul>
                    </div><?//content_submn?>
                    <div class="content_submn">
                        <h3>Theo loại</h3>
                        <ul>
                            <?php for($i=0;$i<count($rs_loainhathue);$i++){ ?>
                                <li><a href="cho-thue/<?=$rs_loainhathue[$i]['tenkhongdau']?>" title="<?=$rs_loainhathue[$i]['ten_'.$lang]?>"><?=$rs_loainhathue[$i]['ten_'.$lang]?></a></li>
                            <?php } ?>
                        </ul>
                    </div><?//content_submn?>
                    <div class="content_submn">
                        <h3>Theo giá</h3>
                        <ul>
                            <?php for($i=0;$i<count($rs_gianhathue);$i++){ ?>
                                <li><a href="cho-thue/<?=$rs_gianhathue[$i]['tenkhongdau']?>" title="<?=$rs_gianhathue[$i]['ten_'.$lang]?>"><?=$rs_gianhathue[$i]['ten_'.$lang]?></a></li>
                            <?php } ?>
                        </ul>
                    </div><?//content_submn?>
                </div><?//sub_menu?>
            </div><?//box_sub?>
        </li>

        <li>
            <a href="du-an-dat" title="<?=_duan?>"><?=_duan?></a>
            <div class="box_sub">
            <div class="sub_menu">
                <div class="content_submn">
                <h3>Theo địa điểm</h3>
                    <ul>
                     <?php for($i=0;$i<count($rs_quan);$i++){ ?>
                        <li><a href="du-an-dat/<?=$rs_quan[$i]['tenkhongdau']?>" title="<?=$rs_quan[$i]['ten_'.$lang]?>"><?=$rs_quan[$i]['ten_'.$lang]?></a></li>
                    <?php } ?>
                    </ul>
                </div><?//content_submn?>
                <div class="content_submn" style="border:none;">
                <h3>Theo giá</h3>
                    <ul>
                    <?php for($i=0;$i<count($rs_giaduan);$i++){ ?>
                        <li><a href="du-an-dat/<?=$rs_giaduan[$i]['tenkhongdau']?>" title="<?=$rs_giaduan[$i]['ten_'.$lang]?>"><?=$rs_giaduan[$i]['ten_'.$lang]?></a></li>
                    <?php } ?>
                    </ul>
                </div><?//content_submn?>
                <div class="content_submn">
                    &nbsp;
                </div><?//content_submn?>
            </div><?//sub_menu?>
            </div><?//box_sub?>
        </li>



        <li class="sub_bv menu_hidden">
            <a href="<?=getCurrentPageURL()?>#" title="<?=_dichvu?>"><?=_dichvu?></a>
            <div class="box_sub_bv">
            <div class="sub_menu_bv">
                <ul>
                <?php for($i=0;$i<count($rs_dichvu);$i++){ ?>
                    <li><a href="dich-vu/<?=$rs_dichvu[$i]['tenkhongdau']?>" title="<?=$rs_dichvu[$i]['ten_'.$lang]?>"><?=$rs_dichvu[$i]['ten_'.$lang]?></a></li>
                <?php } ?>
                </ul>
            </div>
            </div>
        </li>
        
        <li class="sub_bv">
            <a href="<?=getCurrentPageURL()?>#" title="<?=_tintuc?>"><?=_tintuc?></a>
            <div class="box_sub_bv">
            <div class="sub_menu_bv">
                <ul>
                <?php for($i=0;$i<count($rs_tintuc);$i++){ ?>
                    <li><a href="tin-tuc/<?=$rs_tintuc[$i]['tenkhongdau']?>" title="<?=$rs_tintuc[$i]['ten_'.$lang]?>"><?=$rs_tintuc[$i]['ten_'.$lang]?></a></li>
                <?php } ?>
                </ul>
            </div>
            </div>
        </li>

        <li class="sub_bv">
            <a href="<?=getCurrentPageURL()?>#" title="Kiến thức">Kiến thức</a>
            <div class="box_sub_bv">
            <div class="sub_menu_bv">
                <ul>
                <?php for($i=0;$i<count($rs_kienthuc);$i++){ ?>
                    <li><a href="<?=$rs_kienthuc[$i]['tenkhongdau']?>" title="<?=$rs_kienthuc[$i]['ten_'.$lang]?>"><?=$rs_kienthuc[$i]['ten_'.$lang]?></a></li>
                <?php } ?>
                </ul>
            </div>
            </div>
        </li>

        <li><a href="lien-he" title="<?=_lienhe?>"><?=_lienhe?></a></li>
        
    </ul>
</div>