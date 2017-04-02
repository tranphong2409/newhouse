

<link rel="stylesheet" type="text/css" href="dkdn_custom/style.css">

<div class="content3">
<div class="dangnhap">
                <div class="dangnhap-content">
                     <div class="dangnhap-header">
                         <img width="58" src="images/login.png" alt="Đăng nhập">&nbsp;
                         Đăng nhập 
                     </div>
                    <form method="post" name="frmdangnhap" action="" id="frmdangnhap" enctype="multipart/form-data">
                    <div class="dangnhap-content-1">
                        <div style="background-color: white">
                            <div class="dangnhap-content-1-left" style="position: relative">
                                <div class="dangnhap-content-1-left-row">
                                    Tên đăng nhập hoặc email (<span>*</span>)
                                </div>
                                <div class="dangnhap-content-1-left-row">

                                   <input type="text" name="username" id="username_kt" class="input hover_box" value="<?=($_POST['username']=='')?$cookie_us:$_POST['username']?>" required minlength="6"  placeholder="<?=_tendn?> " class="input" />  

                                    <!--  <label id="username_kt-error" class="error" for="username_kt"></label> -->

                                 
                                </div>
                                <div class="dangnhap-content-1-left-row">
                                    Mật khẩu(<span>*</span>)
                                </div>
                                <div class="dangnhap-content-1-left-row">
                                    <input name="password" type="password" id="password" class="input hover_box" value="<?=($_POST['password']=='')?$cookie_ps:$_POST['password']?>" required minlength="6" placeholder="<?=_matkhau?>" class="input"/>

                                    <!--  <label id="password-error" class="error" for="password"></label> -->

                                  
                                </div>
                                <div class="dangnhap-content-1-left-row">
                                    <div class="dangnhap-content-1-left-row-checbox">
                                        <input type="checkbox" class="checkbox"  name="ghinho"/>
                                    </div>
                                    <div class="dangnhap-content-1-left-row-text">
                                        <label for="MainContent__login_LoginUser_RememberMe" id="MainContent__login_LoginUser_RememberMeLabel" class="inline">Nhớ tài khoản</label>
                                    </div>
                                    <div class="clear">
                                    </div>
                                </div>
                                <div class="dangnhap-content-bottom">
                                    <span>
                                        <input  type="submit" class="button button-login" value="<?=_dangnhap?>"/>
                                    </span><span><a href="quen-mat-khau" style="text-decoration: underline;">Quên mật
                                        khẩu?</a></span>
                                </div>
                                <?php /*?> <div class="dangnhap-content-end" style="margin: 10px">
                                
                                    <span>
                                            <a id="MainContent__login_LoginUser_lkGmail" href="javascript:void(0)" onClick="loginFb()">
                                                
                                                <img width="150" height="30" src="images/facebook.jpg" alt="facebook">

                                            </a>
                                          
                                            <a id="MainContent__login_LoginUser_lkYahoo" href="javascript:void(0)"  onclick="login()">
                                                
                                                 <img width="150" src="images/icon_google.png" alt="google">
                                            </a></span>
                                </div> <?php */?>
                            </div>
                            <div class="dangnhap-content-1-right">
                                <div class="dangnhap-content-1-right-top colorblue">
                                    Nếu bạn chưa có tài khoản tại <?=$config_url?></div>
                                <div style='margin-top:10px;' class="dangnhap-content-1-right-nut" align="center">
                                    <a id="MainContent__login_LoginUser_lnkReg" class="linkReg" href="dang-ky">
                                        Đăng ký</a>
                                </div>
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                    </div>
              </form>
        </div>
</div>
</div>


<script language="javascript" src="dkdn_custom/jquery.validate.js"></script>
<script language="javascript" src="dkdn_custom/dkdn.js"></script>
<script type="text/javascript">
$(function() {
  $("#frmdangnhap").validate({
        messages:{
        username:{required:"<?=_nhap._tendn?>",minlength:"<?=_hon6kytu?>"},
        password:{required:"<?=_nhap._matkhau?>",minlength:"<?=_hon6kytu?>"},
        captcha:{required:"<?=_nhap?> <?=_captcha?>!"}
        }
    });
  //kiem tra captcha
    
});
</script>



<script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '1617387515241026',
                cookie: true,  // enable cookies to allow the server to access
                // the session
                xfbml: true,  // parse social plugins on this page
                version: 'v2.4' // use version 2.0
            });
        };

        // Load the SDK asynchronously
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        function loginFb(){
        FB.login(function (response) {
                if (response.authResponse) {
                    FB.api('/me', { locale: 'en_US', fields: 'name, email' }, function (response) {
                       
                        $.ajax({
                            data:{email:response.email,name:response.name,url:'dang-nhap'},
                            type:'post',
                            error:function(e){
                                console.log(e);
                                return false;
                            },
                            url:'ajax/login_face.php',
                            success:function(data){ 

                            if(data==1)
                            {
                                window.location.href = "trang-ca-nhan.html";   
                            }
                            else
                            {
                                 window.location.href = "tai-khoan.html"; 
                            }

                            return false;

                                 
                            }
                        })
                    });
                } else {
                    alert('Login failed! Please try again.');
                }
            }, {scope: 'public_profile,email'});
            return false;
            }
            
            
                

            
            function logout()
        {
            gapi.auth.signOut();
            location.reload();
        }

        function login() 
        {
          var myParams = {
            'clientid' : '304066226598-m0vbvbegf1nr9smgnd6fi3tfaf40o6nq.apps.googleusercontent.com',
            'cookiepolicy' : 'single_host_origin',
            'callback' : 'loginCallback',
            'approvalprompt':'force',
            'scope' : 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read'
          };
          gapi.auth.signIn(myParams);
        }
         
        function loginCallback(result)
        {
            if(result['status']['signed_in'])
            {
                var request = gapi.client.plus.people.get(
                {
                    'userId': 'me'
                });
                request.execute(function (resp)
                {
                    var email = '';
                    
                    
                    if(resp['emails'])
                    {
                        for(i = 0; i < resp['emails'].length; i++)
                        {
                            if(resp['emails'][i]['type'] == 'account')
                            {
                                email = resp['emails'][i]['value'];
                                
                            }
                        }
                    }               
                    var str = "Name:" + resp['displayName'] + "<br>";
                    str += "Image:" + resp['image']['url'] + "<br>";
                    str += "<img src='" + resp['image']['url'] + "' /><br>";
         
                    str += "URL:" + resp['url'] + "<br>";
                    str += "Email:" + email + "<br>";

                   

                    $.ajax({
                        data:{email:email,name:resp['displayName'],url:'dangnhap'},
                        type:'post',
                        
                        error:function(e){
                            console.log(e);
                        },
                        url:'ajax/login_face.php',
                        success:function(data){
                          
                          
                            if(data==1)
                            {
                              
                                window.location.href = "trang-ca-nhan.html";   
                            }
                            else
                            {
                                 window.location.href = "tai-khoan.html"; 
                            }
                            return false;
                                    
                        }
                    })
                    return false;
         
                   
                });
         
            }
         
        }

        function onLoadCallback()
        {
            gapi.client.setApiKey('');
            gapi.client.load('plus', 'v1',function(){});
        }
         (function() {
               var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
               po.src = 'https://apis.google.com/js/client.js?onload=onLoadCallback';
               var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
             })();  

    
    
    
    


</script>

   