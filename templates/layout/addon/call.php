<style type="text/css">
.cnt_top_b{display: none;}
#footer1{z-index:1000; position: fixed; bottom: 0; width: 100%; left: 0;z-index:999999000;}
#footer1 table{width:100%; text-align:center; margin:auto; background:#2890C8;}
#footer1 img {width: 30%;max-width: 35px;vertical-align: middle;}
#footer1 a {color:#fff;}
.blink_me {-webkit-animation-name: blinker;-webkit-animation-duration: 1s;-webkit-animation-timing-function: linear;-webkit-animation-iteration-count: infinite;
-moz-animation-name: blinker;-moz-animation-duration: 1s;-moz-animation-timing-function: linear;-moz-animation-iteration-count: infinite;
animation-name: blinker;animation-duration: 1s;animation-timing-function: linear;animation-iteration-count: infinite;}
@-moz-keyframes blinker {  0% { opacity: 1.0; }50% { opacity: 0.0; }100% { opacity: 1.0; }}
@-webkit-keyframes blinker {  0% { opacity: 1.0; }50% { opacity: 0.0; }100% { opacity: 1.0; }}
@keyframes blinker {  0% { opacity: 1.0; }50% { opacity: 0.0; }100% { opacity: 1.0; }}
</style>

<div class="cnt_top_b hid">
  <div id="footer1" style="">
    <table style="" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td><a class="link_title blink_me" href="tel:<?=$row_setting['hotline']?>"><img src="images/goidien.png"> <?=_goidien?></a></td>

          <td height="50"><a class="link_title" href="sms:<?=$row_setting['hotline']?>"><img src="images/booknow.png"> SMS</a></td> 

          <td><a class="link_title" href="lien-he.html"><img src="images/chiduong.png">&nbsp;<?=_chiduong?></a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>