<? if(!defined('IN_TIPASK')) exit('Access Denied'); include template('header'); ?>
<div class="box">
    <div class="box_left_nav font_gray" style="font-size: 12px;">→ <a href="<?=SITE_URL?>"><?=$setting['site_name']?></a> &gt; <a>我的积分</a> </div>
    <!--内容 begin-->
    <div class="ps_content">
        <!--左边 begin -->
        <div class="ps_contentl">

            <div class="ps_box1">
                <div class="person_name"><?=$user['username']?> </div>
                <div class="user_info">
                    <div class="person_pic"><img id="headPic" src="<?=$user['avatar']?>" alt="<?=$user['username']?>" title="<?=$user['username']?>"></div>
                    <div class="user_subinfo">
                        <span><?=$user['grouptitle']?></span>
                    </div>
                </div>
                <div class="user_info">
                    <? if(2==$user['grouptype']) { ?>                    <div>
                        <? $credit1percent=round(($user['credit1']/$user['creditshigher'])*100); ?>                        <? $credit1percentleft = 100-$credit1percent-1 ?>                        升级进度<img src="css/default/jindutiao_yellow.gif" alt="" style="vertical-align: middle;" width="<?=$credit1percent?>" height="7"><img src="css/default/jindutiao_white-02.gif" alt="" style="vertical-align: middle;" width="<?=$credit1percentleft?>" height="7"><img src="css/default/jindutiao_end.gif" alt="" style="vertical-align: middle;" width="1" height="7"><span class="font_gray">(<?=$user['credit1']?>/<?=$user['creditshigher']?>)</span>
                    </div>
                    <? } ?>                </div>
            </div>
            <!-- 个人信息 结束-->
            <div class="nav_bar">
                <dl>
                    <dd class="nav_link" id="myscore"><a href="<?=SITE_URL?>?user/score.html">我的积分</a></dd>
                    <dd class="hover" id="myask"><a href="<?=SITE_URL?>?user/profile.html">个人资料</a></dd>
                    <dd class="nav_link" id="myask"><a href="<?=SITE_URL?>?user/ask.html">我的提问</a></dd>
                    <dd class="nav_link" id="myanswer"><a href="<?=SITE_URL?>?user/answer.html">我的回答</a></dd>
                    <dd class="nav_link" id="myanswer"><a href="<?=SITE_URL?>?user/favorite.html">我的收藏</a></dd>
                    <dd class="nav_link" id="mymsg"><a href="<?=SITE_URL?>?message/new.html">我的消息</a></dd>
                </dl>
            </div>
            <!--左边 end -->
            <!--最近留言-->
            <div id="newMessage" class="user_info" ></div>
            <!--最近来访--></div>
        <!--左边 end -->

        <!--右边 begin -->
        <!-- 提问 回答-->
        <div class="ps_contentr">
            <div class="main_userCenter main_msg">
                <div class="box_msg">
                    <div class="topNav_msg clearfix">
                            <span class="backmsg"><a href="<?=SITE_URL?>?user/profile.html">个人资料</a></span>
                            <span class="backmsg"><a href="<?=SITE_URL?>?user/uppass.html">修改密码</a></span>
                            <span class="backmsg"><a href="<?=SITE_URL?>?user/editimg.html">修改头像</a></span>
                    </div>
                    <div class="box_msg_lan">
                        <div class="cont01">
                            <form name="upinfoForm"  action="<?=SITE_URL?>?user/profile.html" method="post">
                                <div class="write">
                                    <div class="leftbk">
                                        <div class="fjr">
                                            <div class="retext fL fontBold"> 用户名：</div>
                                            <div class="fL"><?=$user['username']?></div>
                                        </div>
                                        <div class="fjr">
                                            <div class="retext fL fontBold"> 性别：</div>
                                            <div class="fL">
                                                <select name="gender">
                                                    <option value="0" <? if((0 == $user['gender'])) { ?> selected <? } ?> >保密</option>
                                                    <option value="1" <? if((1 == $user['gender'])) { ?> selected <? } ?> >男</option>
                                                    <option value="2" <? if((2 == $user['gender'])) { ?> selected <? } ?> >女</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="fjr">
                                            <div class="retext fL fontBold"> 生日：</div>
                                            <div class="fL">
                                                <? $bdate=explode("-",$user['bday']); ?>                                                <select id="birthyear" name="birthyear" onchange="showbirthday();">
                                                    <? $yearlist = range(1911,2010); ?>                                                    
<? if(is_array($yearlist)) { foreach($yearlist as $year) { ?>
                                                    <option value="<?=$year?>" <? if($bdate['0']==$year) { ?>selected<? } ?> ><?=$year?></option>
                                                    
<? } } ?>
                                                </select> 年
                                                <select id="birthmonth" name="birthmonth" onchange="showbirthday();">
                                                    <? $monthlist = range(1,12); ?>                                                    
<? if(is_array($monthlist)) { foreach($monthlist as $month) { ?>
                                                    <option value="<?=$month?>" <? if($bdate['1']==$month) { ?>selected<? } ?>><?=$month?></option>
                                                    
<? } } ?>
                                                </select> 月
                                                <select id="birthday" name="birthday"><option value="<?=$bdate['2']?>"><?=$bdate['2']?></option></select>日
                                            </div>
                                        </div>
                                        <div class="fjr">
                                            <div class="retext fL fontBold"> 手机：</div>
                                            <div class="fL"><input maxlength="12" name="phone" value="<?=$user['phone']?>" type="text" /></div>
                                        </div>
                                        <div class="fjr">
                                            <div class="retext fL fontBold"> QQ：</div>
                                            <div class="fL"><input maxlength="12" name="qq" value="<?=$user['qq']?>" type="text"  /></div>
                                        </div>
                                        <div class="fjr">
                                            <div class="retext fL fontBold"> MSN：</div>
                                            <div class="fL"><input maxlength="40" name="msn" value="<?=$user['msn']?>" type="text" /></div>
                                        </div>
                                        <div class="fjr">
                                            <div class="retext fL fontBold"> 接收方式：</div>
                                            <div class="fL">
                                                <input type="checkbox" <? if(1 & $user['isnotify']) { ?>checked<? } ?> value="1" name="messagenotify" />&nbsp;站内消息&nbsp;
                                                <input type="checkbox" <? if(2 & $user['isnotify']) { ?>checked<? } ?> value="2" name="mailnotify" />邮件通知
                                            </div>
                                        </div>
                                        <div class="rewrite">
                                            <div class="huitext fL fontBold"> 个性签名：</div>
                                            <div class="fL"><textarea name="signature" id="signature" rows="5" cols="50"><?=$user['signature']?></textarea></div>
                                        </div>
                                        <div class="btn_sure"><input type="submit" name="submit" value="提 交" /></div>
                                    </div>
                                </div>
                            </form>
                            <div class="clearbth">
                            </div>
                            <div class="clearbth">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--右边 end --></div>
    <!--内容 end-->
    <div class="clear">
    </div>
</div>
<script type="text/javascript">
//填写生日
function showbirthday(){
$('#birthday').empty();
for(var i=0;i<28;i++){
$('#birthday').get(0).options.add(new Option(i+1, i+1));
}

if($('#birthmonth').val()!="2"){
$('#birthday').get(0).options.add(new Option(29, 29));
$('#birthday').get(0).options.add(new Option(30, 30));
switch($('#birthmonth').val()){
case "1":
case "3":
case "5":
case "7":
case "8":
case "10":
case "12":{
$('#birthday').get(0).options.add(new Option(31, 31));
}
}
} else if($('#birthyear').val()!="") {
var nbirthyear=$('#birthyear').val();
if(nbirthyear%400==0 || nbirthyear%4==0 && nbirthyear%100!=0) $('#birthday').get(0).options.add(new Option(29, 29));
}
}
</script>
<? include template('footer'); ?>
