<? if(!defined('IN_TIPASK')) exit('Access Denied'); include template('header'); ?>
<script type="text/javascript">

    function check_code(){
        var code=$.trim($('#code').val());
s        $.post("<?=SITE_URL?>index.php?user/ajaxcode",{code: code}, function(flag){
            if(1==flag){
                $('#codetip').html("<font color='green'>OK</font>");
            }else{
                $('#codetip').html("验证码不匹配！");
                $('#codetip').attr('class','font_orange2');
                codeok=0;
            }
        });
    }

</script>
<div class="box">
    <div class="box_left">
        <div class="box_left_nav font_gray">
            → <a href="<?=SITE_URL?>"><?=$setting['site_name']?></a>
        </div>
        <!--分类 开始-->
        <div class="box_left1">
            <div class="boxtop2_title boxtop1">
                <strong>找回密码</strong>
            </div>
            <div style="padding-bottom: 0pt;" class="box_left1_down">
                <br />

                <div class="write">
                   <form name="getpassform"  action="<?=SITE_URL?>user/getpass.html" method="post">
                    <div class="fjr">
                        <div class="retext fL fontBold"> 用 户 名：</div>
                        <div class="fC"><input type="text" size="35"  maxlength="18" id="username" name="username" /></div>
                    </div>
                    <div class="fjr">
                        <div class="retext fL fontBold"> 电子邮箱：</div>
                        <div class="fC"><input type="text" maxlength="50" size="35" name="email" /></div>
                    </div>
                        <div class="fjr">
                            <div class="retext fL fontBold"> 验证码：</div>
                            <div class="fC">
                                <input type="text" size="10"  maxlength="4"  id="code" name="code" onblur="check_code()" />&nbsp;<img id="verifycode" onclick="javascript:updatecode();" src="<?=SITE_URL?>user/code.html"/>
                                <span><a href="javascript:updatecode();">看不清，换一个</a></span>
                                <span id="codetip" class="font_gray2"></span>
                            </div>
                        </div>
                    <div class="btn_sure">&nbsp;&nbsp;<input type="submit" name="submit" value="找回密码" /></div>
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
        <div class="box_left_nav" align="right"><a href="<?=SITE_URL?>user/register.html">还没有账号？立即注册！ >></a></div>
        <div class="boxthree2">
            <div class="boxtop">友情贴士</div>
            <div class="boxthree2down blue">
                <div id="Userorder1_plNo2">
                    <div class="fenr margb">
                        <div class="flmrbc">
                            <p>·请正确填写相关信息以帮您找回密码。</p><br />
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
