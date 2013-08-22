<? if(!defined('IN_TIPASK')) exit('Access Denied'); include template('header'); ?>
<script type="text/javascript">
    usernameok=1;
    repasswdok=1;
    emailok=1;
    codeok=1;
    function check_username(){
        var username=$.trim($('#username').val());
        var length=bytes(username);
        if( length <3 || length >15 ){
            $('#usernametip').html("用户名请使用3到15个字符！");
            $('#usernametip').attr('class','font_orange2');
            usernameok=0;
        }else{
            $.post("<?=SITE_URL?>index.php?user/ajaxusername",{username: username}, function(flag){
                if(-1==flag){
                    $('#usernametip').html("此用户名已经存在！");
                    $('#usernametip').attr('class','font_orange2');
                    usernameok=0;
                }else if(-2==flag){
                    $('#usernametip').html("用户名含有禁用字符！");
                    $('#usernametip').attr('class','font_orange2');
                    usernameok=0;
                }else{
                    $('#usernametip').html("<font color='green'>OK</font>");
                }
            });
        }
    }

    function check_passwd(){
        var passwd=$('#password').val();
        if( bytes(passwd) <6|| bytes(passwd)>16){
            $('#passwordtip').html("密码最少6个字符，最长不得超过16个字符密码！</font>");
            $('#passwordtip').attr('class','font_orange2');
        }else{
            $('#passwordtip').html("<font color='green'>OK</font>");
        }
    }

    function check_repasswd(){
        var repassword=$('#repassword').val();
        if( bytes(repassword) <6|| bytes(repassword)>16){
            $('#repasswordtip').html("密码最少6个字符，最长不得超过16个字符密码！");
            $('#repasswordtip').attr('class','font_orange2');
            repasswdok=0;
        }else{
            if($('#password').val()==$('#repassword').val()){
                $('#repasswordtip').html("<font color='green'>OK</font>");
            }else{
                $('#repasswordtip').html("两次密码输入不一致！");
                $('#repasswordtip').attr('class','font_orange2');
                repasswdok=0;
            }
        }
    }

    function check_email(){
        var email=$.trim($('#email').val());
        if (!email.match(/^[\w\.\-]+@([\w\-]+\.)+[a-z]{2,4}$/ig)){
            $('#emailtip').html("邮件格式不正确!");
            $('#emailtip').attr('class','font_orange2');
            usernameok=0;
        }else{
            $.post("<?=SITE_URL?>index.php?user/ajaxemail",{email: email}, function(flag){
                if(-1==flag){
                    $('#emailtip').html("此邮件地址已经注册！");
                    $('#emailtip').attr('class','font_orange2');
                    emailok=0;
                }else if(-2==flag){
                    $('#emailtip').html("邮件地址被禁止注册！");
                    $('#emailtip').attr('class','font_orange2');
                    emailok=0;
                }else{
                    $('#emailtip').html("<font color='green'>OK</font>");
                    $('#emailtip').attr('class','font_orange2');
                }
            });
        }
    }

    function check_code(){
        var code=$.trim($('#code').val());
        $.post("<?=SITE_URL?>index.php?user/ajaxcode",{code: code}, function(flag){
            if(1==flag){
                $('#codetip').html("<font color='green'>OK</font>");
            }else{
                $('#codetip').html("验证码不匹配！");
                $('#codetip').attr('class','font_orange2');
                codeok=0;
            }
        });
    }

    function docheck(){
        <? if($setting['code_register']) { ?>        return (usernameok && repasswdok && emailok && codeok);
        <? } else { ?>        return (usernameok && repasswdok && emailok );
        <? } ?>    }


</script>
<div class="box">
    <div class="box_left">
        <div class="box_left_nav font_gray">
            → <a href="<?=SITE_URL?>"><?=$setting['site_name']?></a>
        </div>
        <!--分类 开始-->
        <div class="box_left1">
            <div class="boxtop2_title boxtop1">
                <strong>注册新用户</strong>
            </div>
            <div style="padding-bottom: 0pt;" class="box_left1_down">
                <br />

                <div class="write">
                    <form name="reg" name="registform"   action="<?=SITE_URL?>user/register.html" method="post" onsubmit="return docheck();">
                        <div class="fjr">
                            <div class="retext fL fontBold"> 用 户 名：</div>
                            <div class="fC">
                                <input type="text" size="35"  maxlength="18" id="username" name="username" onblur="check_username()">
                                <span id="usernametip" class="font_gray2">最长不得超过7个汉字或14个字节(数字，字母和下划线)</span>
                            </div>
                        </div>
                        <div class="fjr">
                            <div class="retext fL fontBold"> 登录密码：</div>
                            <div class="fC">
                                <input type="password" size="35" maxlength="64"  id="password" name="password"  onblur="check_passwd()">
                                <span id="passwordtip" class="font_gray2">长度6-14位，字母区分大小写</span>
                            </div>
                        </div>
                        <div class="fjr">
                            <div class="retext fL fontBold"> 密码确认：</div>
                            <div class="fC">
                                <input type="password" size="35" maxlength="16" id="repassword" name="repassword"  onblur="check_repasswd()">
                                <span id="repasswordtip" class="font_gray2">与登录密码输入一致</span>
                            </div>
                        </div>
                        <div class="fjr">
                            <div class="retext fL fontBold"> 电子邮件：</div>
                            <div class="fC">
                                <input type="text" size="35" maxlength="100" id="email" name="email" onblur="check_email()" >
                                <span id="emailtip" class="font_gray2">请输入有效的邮件地址，当密码遗失时凭此领取</span>
                            </div>
                        </div>
                      <? if($setting['code_login']) { ?>                        <div class="fjr">
                            <div class="retext fL fontBold"> 验证码：</div>
                            <div class="fC">
                                <input type="text" size="10"  maxlength="4"  id="code" name="code" onblur="check_code()" />&nbsp;<img id="verifycode" onclick="javascript:updatecode();" src="<?=SITE_URL?>user/code.html"/>
                                <span><a href="javascript:updatecode();">看不清，换一个</a></span>
                                <span id="codetip" class="font_gray2"></span>
                            </div>
                        </div>
                        <? } ?>                        <div class="btn_sure">&nbsp;&nbsp;<input type="submit" name="submit" value="创建用户" /></div>
                    </form>
                </div>
            </div>
            <br /><br /><br />
        </div>
        <!--分类 结束-->
        <div class="blank10">
        </div>
        <!--精彩推荐 开始-->
        <!--精彩推荐 结束-->
        <div class="blank10">
        </div>
        <!--内容左二栏 begin-->

        <!--内容左二栏 end--></div>
    <!--内容左栏 end-->
    <!--内容右栏 begin-->
    <div class="boxthree">
        <div class="box_left_nav" align="right"><a href="<?=SITE_URL?>user/login.html" class="f14">如果您已经注册，请点此“登录”。>></a></div>
        <div class="boxthree2">
            <div class="boxtop">友情贴士</div>
            <div class="boxthree2down blue">
                <div id="Userorder1_plNo2">
                    <div class="fenr margb">
                        <div class="flmrbc">
                            <p>·我们提醒您注意，您需要注册并登陆，才能享受我们的完整服务进行各项操作，否则您只有搜索和浏览的权限。</p><br />
                            <p>·密码过于简单有被盗的风险，一旦密码被盗你的个人信息有泄漏的危险，同时你和你好友的利益也会造成损害。</p><br />
                            <p>·我们拒绝垃圾邮件，请使用有效的邮件地址。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--内容右栏 end-->
    <div class="clear">
    </div>
</div>
<? include template('footer'); ?>
