
<script language="javascript">	
	$(document).ready(function() {
		$("#chonhet").click(function(){
			var status=this.checked;
			$("input[name='chon']").each(function(){this.checked=status;})
		});
		
		$("#xoahet").click(function(){
			var listid="";
			$("input[name='chon']").each(function(){
				if (this.checked) listid = listid+","+this.value;
				})
			listid=listid.substr(1);	 //alert(listid);
			if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}
			hoi= confirm("Bạn có chắc chắn muốn xóa?");
			if (hoi==true) document.location = "index.php?com=comment&act=delete&id_cat=<?=$_GET['id_cat']?>&curPage=<?=$_GET['curPage']?>&id_item=<?=$_GET['id_item']?>&listid=" + listid;
		});
	});


</script>
<div class="control_frm" style="margin-top:25px;">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
        	<li><a href="index.php?com=comment&act=man<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span>Quản lý <?=$title_main ?></span></a></li>
        	<?php if($_GET['keyword']!=''){ ?>
				<li class="current"><a href="#" onclick="return false;">Kết quả tìm kiếm " <?=$_GET['keyword']?> " </a></li>
			<?php }  else { ?>
            	<li class="current"><a href="#" onclick="return false;">Tất cả</a></li>
            <?php } ?>
        </ul>
        <div class="clear"></div>
    </div>
</div>


<form name="f" id="f" method="post">
<div class="control_frm" style="margin-top:0;">
  	<div style="float:left;">
    	<input type="button" class="blueB" value="Thêm" onclick="location.href='index.php?com=comment&act=add<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>'" />
        <input type="button" class="blueB" value="Xoá Chọn" id="xoahet" />

    </div>  
</div>

<div class="widget">
  <div class="title"><span class="titleIcon">
    <input type="checkbox" id="titleCheck" name="titleCheck" />
    </span>
    <h6>Chọn tất cả</h6>
    <div class="timkiem">
	    <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm ">
	    <button type="button" class="blueB"  value="">Tìm kiếm</button>
    </div>
  </div>
  <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck mTable" id="checkAll">
    <thead>
      <tr>
       
        <td class="tb_data_small"><a href="#" class="tipS" style="margin: 5px;">Thứ tự</a></td>     
        <td class="tb_data_small">Sản Phẩm</th>
		<td class="tb_data_small">Họ Tên</th>
        <td class="tb_data_small">Nội Dung</th>
        <td class="tb_data_small">Ngày Gửi</th>
        <td class="tb_data_small">Trả lời</th>
        <td class="tb_data_small">Người đăng</th>
        <td class="tb_data_small">Ẩn/Hiện</td>
        <td width="200">Thao tác</td>
      </tr>
    </thead>

    <tbody>
         <?php for($i=0, $count=count($items); $i<$count; $i++){?>
          <tr>
       <td>
            <input type="text" value="<?=$items[$i]['stt']?>" name="ordering[]" onkeypress="return OnlyNumber(event)" class="tipS smallText update_stt" original-title="Nhập số thứ tự bài viết" rel="<?=$items[$i]['id']?>" />

            <div id="ajaxloader"><img class="numloader" id="ajaxloader<?=$items[$i]['id']?>" src="images/loader.gif" alt="loader" /></div>
        </td>

       
        
	
        <td align="center">
        
		<?php
            $d->reset();
            $sql="select * from table_comment where id='".$items[$i]['sanpham']."'";
            $d->query($sql);
            $item_danhmuc1= $d->fetch_array();
        ?>  
        <a href="index.php?com=comment&act=edit&id=<?=$items[$i]['id']?>" target="_blank" <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>><?=$item_danhmuc1['ten_vi']?></a>     
        </td>
        
        <td align="center">
        	<a href="index.php?com=comment&act=edit&id=<?=$items[$i]['id']?>" <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>><?=$items[$i]['hoten']?></a> 
        </td>
        
     
        
        <td align="center" <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>>
      		 <?=$items[$i]['noidung']?>
        </td>
        
        <td align="center" <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>><?=date('d/m/Y - g:i A',$items[$i]['ngaytao']);?></td>
        <td align="center">
       		<a href="index.php?com=comment&act=add&sanpham=<?=$items[$i]['sanpham']?>&id_cat=<?=$items[$i]['id']?>&vitri=<?=$items[$i]['com']?>"><img src="images/arrow_62.gif" /></a>
        </td>
        
         <td align="center" <?php if($items[$i]['view']==0){ echo "style='font-weight:bold;'";}?>>
       		<?php if($items[$i]['quantri']==0){?>
            	<span>Khách</span>
            <?php } else { ?>
            	<b style="color:rgba(255,0,0,1)">Admin</b>
            <?php } ?>
        </td>
        
        
        
         
       
        <td align="center">
          <a data-val2="table_<?=$_GET['com']?>" rel="<?=$items[$i]['hienthi']?>" data-val3="hienthi" class="diamondToggle <?=($items[$i]['hienthi']==1)?"diamondToggleOff":""?>" data-val0="<?=$items[$i]['id']?>" ></a>   
        </td>
       
        <td class="actBtns">
            <a href="index.php?com=comment&act=edit&id_list=<?=$items[$i]['id_list']?>&id_cat=<?=$items[$i]['id_cat']?>&id_item=<?=$items[$i]['id_item']?>&id_sub=<?=$items[$i]['id_sub']?>&id=<?=$items[$i]['id']?><?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" title="" class="smallButton tipS" original-title="Sửa bài viết"><img src="./images/icons/dark/pencil.png" alt=""></a>

            <a href="index.php?com=comment&act=delete&id=<?=$items[$i]['id']?><?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" onClick="if(!confirm('Xác nhận xóa')) return false;" title="" class="smallButton tipS" original-title="Xóa bài viết"><img src="./images/icons/dark/close.png" alt=""></a>
        </td>
      </tr>
         <?php } ?>
                </tbody>
  </table>
</div>
</form>  

<div class="paging"><?=$paging?></div>






