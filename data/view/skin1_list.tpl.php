<? if(!defined('IN_TIPASK')) exit('Access Denied'); include template('header'); ?>
<div class="box">
    <div class="box_left">
        <div class="box_left_nav font_gray">
→ <a href="<?=SITE_URL?>"><?=$setting['site_name']?></a> &gt; <? if(1==$status) { ?>网友正在问<? } elseif(4==$status) { ?>赏金求答案<? } ?></div>
        <!--内容左二栏 begin-->
        <div class="ask_list">
            <div class="ask_slider">
                <ul>
                    <li class="current_title" style="cursor: auto;"><? if(1==$status) { ?>网友正在问<? } elseif(4==$status) { ?>赏金求答案<? } ?></li>
                </ul>
            </div>
            <!--回答内容 开始-->
            <!--回答内容 开始-->
            <div class="box_left1_down">
                <ul class="question_list1">
                    <li class="tit">
                        <span class="list_column1" style="font-size: 12px;">标题<span class="font_gray">(共<?=$rownum?>条)</span></span>
                        <span class="list_column2"><span>提问时间</span>提问人</span>
                        <span class="list_column3">回答数</span>
                    </li>
                    
<? if(is_array($questionlist)) { foreach($questionlist as $question) { ?>
                    <li>
                        <span class="list_column1 blue1">
                            <? if($question['price']) { ?><div class="boxtwo3downleft"><?=$question['price']?></div><? } ?>                            <a href="<?=$question['url']?>" target="_blank" title="<?=$question['title']?>"><?=$question['title']?></a>
                            <span class="font_gray2">[<a href="<?=SITE_URL?>c-<?=$question['cid']?>.html"><?=$question['category_name']?></a>]</span>
                        </span>
                        <span class="list_column2">
                            <span><?=$question['format_time']?></span>
                            <a href="<?=SITE_URL?>u-<?=$question['authorid']?>.html" target="_blank" title="<?=$question['author']?>"><?=$question['author']?></a>
                        </span>
                        <span class="list_column3"><?=$question['answers']?></span>
                    </li>
                    
<? } } ?>
                </ul>

                <!--回答内容 结束-->
                <div id="ask_page" style="padding: 5px 0pt;">
                    <span id="pg_right"><?=$departstr?></span>
                </div>
            </div>
        </div>
        <!--内容左二栏 end--></div>
    <!--内容左栏 end-->
    <!--内容右栏 begin-->
    <div class="boxthree">
        <div class="box_left_nav">
        </div>
        <div class="boxthree2">
            <div class="boxtop">
积分达人榜</div>
            <div class="boxthree2down blue">
                <div id="Userorder1_plNo2">
                    <div class="fenr margb">
                        <div class="flmrbc">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">  <? $alluserlist=$this->fromcache('alluserlist'); $alluser=array_shift($alluserlist); if($alluser) { ?>   <tr>
                            <td class="flmrbtab" align="left" bgcolor="#f6fdff" valign="top" width="120" height="120">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" height="120">
                                    <tr>
                                        <td align="center" valign="middle" height="120">
                                            <div class="flmrbimg" style="height: 80px; width: 80px;">
                                                <table border="0" cellpadding="0" cellspacing="0" width="80" height="80">
                                                    <tr>
                                                        <td style="padding-top: 0pt;" align="center" valign="middle"><a href="<?=SITE_URL?>u-<?=$alluser['uid']?>.html"   class="link_img" target="_blank"><img src="<?=$alluser['avatar']?>" style="border-width: 0px;" width="80" height="80"></a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td class="flmrbtab" align="left" bgcolor="#f6fdff" valign="top" width="137">
                                
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td colspan="2" align="left" valign="middle">
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" height="24">
                                                <tr>
                                                    <td class="flmrbh" width="47">排名：1</td>
                                                    <td align="left" valign="middle" width="90"><img src="<?=SITE_URL?>css/default/img_all.gif"  width="15" height="14"></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="flmrbh">昵称：<span class="gray_m"><a href="<?=SITE_URL?>u-<?=$alluser['uid']?>.html"  target="_blank"><?=$alluser['username']?> </a></span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="flmrbh">级别：<span><?=$alluser['grouptitle']?></span></td>
                                    </tr>
                                    <tr>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="flmrbh"><span >积分</span>：<span class="red"><?=$alluser['credit1']?></span> </td>
                                    </tr>
                                </table>
                                
                            </td>
                        </tr>
                                
       
                 	 <? } ?>                  
                                <tr>
                                    <td colspan="2" class="flmrbtab">
                                        <div>
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <tr>
                                                    <td width="7%">No.</td>
                                                    <td width="45%">昵称</td>
                                                    <td width="30%">级别</td>
                                                    <td width="18%"><span>积分</span></td>
                                                </tr>
<? if(is_array($alluserlist)) { foreach($alluserlist as $index => $alluser) { $index=$index+2; ?>                                                <tr>
                                                    <td class="flmrbphb"><div class="boxthree4paihang1"><?=$index?></div></td>
                                                    <td class="flmrbph">
                                                        <div class="flmrbphxm"><a href="<?=SITE_URL?>u-<?=$alluser['uid']?>.html"  target="_blank"><?=$alluser['username']?></a></div>
                                                    </td>
                                                    <td class="flmrbph"><?=$alluser['grouptitle']?></td>
                                                    <td class="flmrbpp"><?=$alluser['credit1']?></td>
                                                </tr>
<? } } ?>
</table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
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
<!--内容 部分 end-->
<? include template('footer'); ?>
