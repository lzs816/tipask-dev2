<? if(!defined('IN_TIPASK')) exit('Access Denied'); include template(header,admin); ?>
<div style="width:100%; height:15px;color:#000;margin:0px 0px 10px;">
    <div style="float:left;"><a href="index.php?admin_main/stat<?=$setting['seo_suffix']?>" target="main"><b>���������ҳ</b></a>&nbsp;&raquo;&nbsp;��Ϣģ��</div>
</div><? if(isset($message)) { $type=isset($type)?$type:'correctmsg';  ?><table cellspacing="1" cellpadding="4" width="100%" align="center" class="tableborder">
    <tr>
        <td class="<?=$type?>"><?=$message?></td>
    </tr>
</table><? } ?><form action="index.php?admin_setting/msgtpl<?=$setting['seo_suffix']?>" method="post">
    <a name="��������"></a>
    <table cellspacing="1" cellpadding="4" width="100%" align="center" class="tableborder">
        <tr class="header">
            <td colspan="2">��Ϣģ������</td>
        </tr>
        <tr>
            <td colspan="2">
                ��Ϣģ�����ù���<br />
                1����վ����:<?=wzmc?>��Ӧ�÷�Χ��������Ϣģ�壩<br />
                2���������:<?=wtbt?>��Ӧ�÷�Χ��������Ϣģ�壩<br />
                3����������:<?=wtms?>��Ӧ�÷�Χ��������Ϣģ�壩<br />
                4���ش�����:<?=hdnr?>��Ӧ�÷�Χ�����ش�����ģ����Ч��<br />
                5�����ϱ�ǩ���������������"{}"������ͨ��������������������Ϣģ�壬ÿ����Ϣ��������ϵͳ���Զ���������鿴���ӡ�
            </td>
        </tr>
        <tr class="header">
            <td colspan="2">�����յ��µĻش�</td>
        </tr>
        <tr>
            <td width="45%"><b>�ʼ�����Ϣ�����⣺</b><br><span class="smalltxt">վ����Ϣ�����ʼ��ı���</span></td>
            <td><input  type="text" <? if(isset($msgtpl['0']['title'])) { ?>value="<?=$msgtpl['0']['title']?>"<? } ?> style="width:300px;" name="title1"></td>
        </tr>
        <tr>
            <td width="45%"><b>��Ϣ����:</b><br><span class="smalltxt">վ����Ϣ�����ʼ�������</span></td>
            <td><textarea class="area" name="content1"  style="height:100px;width:300px;"><? if(isset($msgtpl['0']['content'])) { ?><?=$msgtpl['0']['content']?><? } ?></textarea></td>
        </tr>
        <tr class="header">
            <td colspan="2">�ش𱻲���</td>
        </tr>
        <tr>
            <td width="45%"><b>�ʼ�����Ϣ�����⣺</b><br><span class="smalltxt">վ����Ϣ�����ʼ��ı���</span></td>
            <td><input  type="text" <? if(isset($msgtpl['1']['title'])) { ?>value="<?=$msgtpl['1']['title']?>"<? } ?> style="width:300px;" name="title2"></td>
        </tr>
        <tr>
            <td width="45%"><b>��Ϣ����:</b><br><span class="smalltxt">վ����Ϣ�����ʼ�������</span></td>
            <td><textarea class="area" name="content2"  style="height:100px;width:300px;"><? if(isset($msgtpl['1']['content'])) { ?><?=$msgtpl['1']['content']?><? } ?></textarea></td>
        </tr>
        <tr class="header">
            <td colspan="2">������ڹر�</td>
        </tr>
        <tr>
            <td width="45%"><b>�ʼ�����Ϣ�����⣺</b><br><span class="smalltxt">վ����Ϣ�����ʼ��ı���</span></td>
            <td><input  type="text" <? if(isset($msgtpl['2']['title'])) { ?>value="<?=$msgtpl['2']['title']?>"<? } ?> style="width:300px;" name="title3"></td>
        </tr>
        <tr>
            <td width="45%"><b>��Ϣ����:</b><br><span class="smalltxt">վ����Ϣ�����ʼ�������</span></td>
            <td><textarea class="area" name="content3"  style="height:100px;width:300px;"><? if(isset($msgtpl['2']['content'])) { ?><?=$msgtpl['2']['content']?><? } ?></textarea></td>
        </tr>
        <tr class="header">
            <td colspan="2">�ش�����</td>
        </tr>
        <tr>
            <td width="45%"><b>�ʼ�����Ϣ�����⣺</b><br><span class="smalltxt">վ����Ϣ�����ʼ��ı���</span></td>
            <td><input  type="text" <? if(isset($msgtpl['3']['title'])) { ?>value="<?=$msgtpl['3']['title']?>"<? } ?> style="width:300px;" name="title4"></td>
        </tr>
        <tr>
            <td width="45%"><b>��Ϣ����:</b><br><span class="smalltxt">վ����Ϣ�����ʼ�������</span></td>
            <td><textarea class="area" name="content4"  style="height:100px;width:300px;"><? if(isset($msgtpl['3']['content'])) { ?><?=$msgtpl['3']['content']?><? } ?></textarea></td>
        </tr>
    </table>
    <br>
    <center><input type="submit" class="button" name="submit" value="�� ��"></center><br>
</form>
<br>
<? include template(footer,admin); ?>