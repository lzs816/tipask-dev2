<? if(!defined('IN_TIPASK')) exit('Access Denied'); include template('header'); ?>
<div class="box">
    <div class="box_left_nav font_gray" style="font-size: 12px;">→ <a href="<?=SITE_URL?>"><?=$setting['site_name']?></a> &gt; <a><?=$member['username']?>的问答主页</a> </div>
    <!--内容 begin-->
    <div class="ps_content">
        <!--左边 begin -->
        <div class="ps_contentl">
            <!--用户信息-->
            <!--左边 begin -->
            <!-- 个人信息 开始-->
            <div class="ps_box1">
                <div class="person_name"><?=$member['username']?></div>
                <div class="user_info">
                    <div class="person_pic"><img id="headPic" src="<?=$member['avatar']?>" alt="<?=$member['username']?>" title="<?=$member['username']?>"></div>
                    <div class="user_subinfo">
                        <span><?=$member['grouptitle']?></span>
                    </div>
                </div>
                <div class="user_info">
                    <? if(2==$membergroup['grouptype']) { ?>                    <div>
                        <? $credit1percentleft = 100-$credit1percent-1 ?>                        升级进度<img src="<?=SITE_URL?>css/default/jindutiao_yellow.gif" alt="" style="vertical-align: middle;" width="<?=$credit1percent?>" height="7"><img src="<?=SITE_URL?>css/default/jindutiao_white-02.gif" alt="" style="vertical-align: middle;" width="<?=$credit1percentleft?>" height="7"><img src="css/default/jindutiao_end.gif" alt="" style="vertical-align: middle;" width="1" height="7"><span class="font_gray">(<?=$member['credit1']?>/<?=$membergroup['creditshigher']?>)</span>
                    </div>
                   <? } ?>                </div>
                <? if($user['uid'] && $user['uid'] != $member['uid']) { ?>                <div id="Usercontrol1_headOperate">
                    <span class="ps_icon1"><a href="javascript:void(0)"  onclick="javascript:sendmsg('<?=$member['username']?>');">发送短消息</a></span>
                    <span class="ps_icon2 margin20"><a href="<?=SITE_URL?>?question/add/<?=$member['uid']?>.html">向TA提问</a></span>
                </div>
                <? } ?>            </div>
            <!-- 个人信息 结束-->
            <div class="nav_bar">
                <dl>
                    <dd class="hover" id="myscore"><a href="<?=SITE_URL?>u-<?=$member['uid']?>.html">TA的问答主页</a></dd>
                    <dd class="nav_link" id="myask"><a href="<?=SITE_URL?>?user/space_ask/<?=$member['uid']?>.html">TA的提问</a></dd>
                    <dd class="nav_link" id="myanswer"><a href="<?=SITE_URL?>?user/space_answer/<?=$member['uid']?>.html">TA的回答</a></dd>
                </dl>
            </div>
            <!--左边 end -->
        </div>
        <!--左边 end -->
        <!--右边 begin -->
        <div id="centerInfo" class="ps_contentr" style>
            <!-- 个人主页 begin-->
            <div class="column">
                <div class="column_title">基本资料</div>
                <div class="write">
                    <div class="leftbk">
                        <div class="fjr">
                            <div class="retext fL fontBold"> 性别：</div>
                            <div class="fL"><? if(1 == $member['gender']) { ?>男<? } elseif(0 == $member['gender']) { ?>女<? } else { ?>保密<? } ?></div>
                        </div>
                        <div class="fjr">
                            <div class="retext fL fontBold"> 生日：</div>
                            <div class="fL"><?=$member['bday']?></div>
                        </div>
                        <div class="fjr">
                            <div class="retext fL fontBold">QQ：</div>
                            <div class="fL"><?=$member['qq']?></div>
                        </div>
                        <div class="fjr">
                            <div class="retext fL fontBold">MSN：</div>
                            <div class="fL"><?=$member['msn']?></div>
                        </div>
                        <div class="fjr">
                            <div class="retext fL fontBold">个性签名：</div>
                            <div class="fL"><?=$member['signature']?></div>
                        </div>
                    </div>
                </div>
                <div class="clearbth">
                </div>
            </div>
            <div class="column">
                <div class="column_title">详细资料</div>
                <div class="write">
                    <div class="leftbk">
                        <div class="fjr">
                            <div class="retext fL fontBold"> 会员组：</div>
                            <div class="fL"><?=$membergroup['grouptitle']?></div>
                        </div>
                        <div class="fjr">
                            <div class="retext fL fontBold"> 总经验值：</div>
                            <div class="fL"><?=$member['credit1']?></div>
                        </div>
                        <div class="fjr">
                            <div class="retext fL fontBold">总财富值：</div>
                            <div class="fL"><?=$member['credit2']?></div>
                        </div>
                        <div class="fjr">
                            <div class="retext fL fontBold">回答数：</div>
                            <div class="fL"><?=$member['answers']?></div>
                        </div>
                        <div class="fjr">
                            <div class="retext fL fontBold">提问数：</div>
                            <div class="fL"><?=$member['questions']?></div>
                        </div>
                        <div class="fjr">
                            <div class="retext fL fontBold">采纳率：</div>
                            <div class="fL"><?=$adoptpercent?>%</div>
                        </div>
                        <div class="fjr">
                            <div class="retext fL fontBold">最后登陆：</div>
                            <div class="fL"><?=$member['lastlogin']?></div>
                        </div>
                    </div>
                </div>
                <div class="clearbth">
                </div>
            </div>
                <!--  消息提醒 -->
                <!-- 提问 回答-->
                <div class="ps_contentr"></div>
                <!--右边 end --></div>
            <!--内容 end-->
            <div class="clear"></div>
        </div>
    </div>
<script type="text/javascript">
    function sendmsg(username){
        var is_code = <?=$setting['code_message']?>;
        var code_message='';
        if(is_code==1){
            code_message='<tr><td align="right" width="100">验证码 ：</td><td width="90%"><input maxlength="4" name="code" size="10" /><img id="verifycode" onclick="javascript:updatecode();" src="<?=SITE_URL?>?user/code.html"/>&nbsp;<a href="javascript:updatecode();">看不清，换一个</a><span id="codetip"></span></td></tr>';
        }
        $.dialog({
            id:'sendmsgDiv',
            position:'center',
            align:'left',
            fixed:1,
            width:400,
            title:'发送消息',
            fnOk:function(){document.sendmsgForm.submit();$.dialog.close('sendmsgDiv')},
            fnCancel:function(){$.dialog.close('sendmsgDiv')},
            content:'<form name="sendmsgForm"  action="<?=SITE_URL?>?message/send.html" method="post" ><input type="hidden" name="username" value="'+username+'"><table cellspacing="0" cellpadding="0" width="100%" border="0" valign="top"><tr><td class="f14" valign="top" nowrap align="left" width="10%" height="35">接收人 :&nbsp;&nbsp; </td><td valign="top" height="35">'+username+'</td></tr><tr><td class="f14" valign="top" nowrap align="left" height="35">主题 :&nbsp;&nbsp; </td><td valign="top" width="60%" height="35"><input type="text"  size="45"   name="title"  maxlength="20"></td></tr><tr><td class="f14" valign="top" nowrap align="left" height="35"> 内容 :&nbsp;&nbsp; </td><td valign="top" height="35"><textarea name="content" style="width: 95%; padding-top: 1px; font-size: 14px;" rows="8" ></textarea></td></tr>'+code_message+'</table></form>'
        });
    }
</script>
    
<? include template('footer'); ?>
