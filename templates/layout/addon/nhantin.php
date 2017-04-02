<script type="text/javascript">
	$(document).ready(function() {
		$('.dangkymail').submit(function(event) {
			var email = $('.dangkymail input').val();
			if(email==''){
				alert('<?=_vuilongnhapemail?>');
				$('.dangkymail input').focus();
			} else {
				$.ajax ({
					type: "POST",
					url: "ajax/dangky_email.php",
					data: {email:email},
					success: function(result) { 
						if(result==0){
							$('.dangkymail input').attr('value','');
							alert('<?=_dangkythanhcong?>! ');
							$('.dangkymail input').attr('value','');
						} else if(result==1){
							alert('<?=_emaildaduocdangky?>! ');
							$('.dangkymail input').attr('value','');
						} else if(result==2){
							alert(' ! <?=_vuilongthulai?> ');
						}
					}
				});
			}
			return false;
		});
	});
</script>

<div class="content_nhantin">
<h5>Đăng ký nhận tin</h5>
<p>Đăng ký email của bạn đển nhận những thông tin mới nhất từ chúng tôi</p>
<div class="clear" style="height:20px;"></div>
<form action="" method="post" name="dangkymail" class="dangkymail">
	<input name="email" type="text" class="input" placeholder="<?=_nhapemailcuaban?>...">
	<button type="submit" value=""></button>
</form>
</div>