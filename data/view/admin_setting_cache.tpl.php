<? if(!defined('IN_TIPASK')) exit('Access Denied'); include template(header,admin); ?>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/dialog.js" type="text/javascript"></script>
<script src="js/admin.js" type="text/javascript"></script>
<script src="js/calendar.js" type="text/javascript"></script>
<div id="append">
</div>
<div style="width:100%; height:15px;color:#000;margin:0px 0px 10px;">
  <div style="float:left;"><a href="index.php?admin_main/stat<?=$setting['seo_suffix']?>" target="main"><b>���������ҳ</b></a>&nbsp;&raquo;&nbsp;���»���</div>
</div><? if(isset($message)) { $type=isset($type)?$type:'correctmsg';  ?><table cellspacing="1" cellpadding="4" width="100%" align="center" class="tableborder">
<tr>
<td class="<?=$type?>"><?=$message?></td>
</tr>
</table><? } ?><table width="100%" cellspacing="1" cellpadding="4" align="center" class="tableborder">
<tbody>
<tr class="header" ><td>���»���</td></tr>
<tr class="altbg1"><td>����̨�����÷����ı����Ҫ��ʱ�����»��棬����������Ч</td></tr>
</tbody>
</table>
<form action="index.php?admin_setting/cache<?=$setting['seo_suffix']?>" method="post">
 <table width="100%" border="0" cellpadding="4" cellspacing="1" align="center" class="tableborder">
<tr>
<td class="altbg2" width="10"><input class="checkbox" type="checkbox"  checked value="data" name="type[]"></td><td class="altbg2" >�������ݻ���</td>
</tr>
<tr>
<td class="altbg2" width="10"><input class="checkbox" type="checkbox"  checked  value="tpl" name="type[]"></td><td class="altbg2">����ģ�建��</td>
</tr>
<tr>
<td colspan="2" class="altbg1"><input class="btn" type="submit" name="submit" value="�� ��"></td>
</tr>
</table>
</form>
<? include template(footer,admin); ?>