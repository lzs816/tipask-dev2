<? if(!defined('IN_TIPASK')) exit('Access Denied'); ?>
<div class="sousuo">
    <form action="<?=SITE_URL?>?question/search/3.html" method="post">
请输入您的问题：<input type="text" style="vertical-align: middle;" class="ask_input"  value="<? if(isset($word)) { ?><?=$word?><? } ?>" name="word"  maxlength="100"  >
        <input type="submit" class="btn_search" value="搜 索" style="vertical-align: middle;" >
        <input type="button" class="btn_ask" value="提 问" style="vertical-align: middle;"  onclick="ask_submit();" >
    </form>
</div><? if('index/default'==$regular) { ?><div class="friend_link">
    <div class="friend_linkl">友情链接：</div>
    <div class="friend_linkr">
        <ul>
            
<? if(is_array($linklist)) { foreach($linklist as $link) { ?>
            <li>
                <a target="_blank" href="<?=$link['url']?>" title="<?=$link['description']?>">
                    <? if($link['logo']) { ?><img src="<?=$link['logo']?>" alt="<?=$link['name']?>" />
                    <? } else { ?>                    <?=$link['name']?>
                    <? } ?>                </a>
            </li>
            
<? } } ?>
        </ul>
    </div>
</div><? } ?><div style="text-align: center;">
    <div style="width: 980px; height: 105px; background: none repeat scroll 0% 0% rgb(255, 255, 255); font-size: 12px; font-family: '宋体'; clear: both; margin: 0pt auto;" class="DivCss20091020WZiColor333">
        <div style="line-height: 20px; text-align: center; margin-top: 5px;"><br />声明：在健康问答平台中所有关于疾病的建议都不能代替执业医师的面对面诊断。医生及网友言论仅代表其个人观点，请谨慎参阅，本站不承担相关法律责任。<br />
            |<a href="<?=SITE_URL?>" target="_blank"><?=$setting['site_name']?></a>|<a href="mailto:<?=$setting['admin_email']?>" target="_blank">联系我们</a>|<a href="http://www.miibeian.gov.cn" target="_blank"><?=$setting['site_icp']?></a>|<script src="http://s23.cnzz.com/stat.php?id=3435241&web_id=3435241" type="text/javascript"></script>
        </div>
        <div style="line-height: 23px; text-align: center; position: relative;"></div><div style="font-family: Verdana; line-height: 20px; text-align: center;"></div>
    </div>
</div>
<?=$setting['site_statcode']?>

</body>
</html>
