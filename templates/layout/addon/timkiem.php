<script type="text/javascript">
  $(document).ready(function() {
       $('.frm_timkiem').submit(function(){
          var timkiem = $('#name_tk').val();
          if(!timkiem){
            alert('<?=_vuilongnhaptukhoa?>');
          } else {
            window.location.href="tim-kiem.html&keywords="+timkiem;
          }
          return false;
      })
  });
</script>

  <div id="timkiem">
      <form action="tim-kiem.html" method="" name="frm2" class="frm_timkiem">
        <input type="text" name="timkiem" id="name_tk" class="input" placeholder="Nhập từ khóa..." autocomplete="off">
        <button type="submit" value="" class="nut_tim"></button>
      </form>
  </div>