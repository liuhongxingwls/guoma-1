<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('forumdisplay');?><?php include template('common/header'); ?><div class="z_current">
    <div class="z_dqwz">
        <a href="./" title="首页">首页</a><a>&gt;</a><a href="forum.php"><?php echo $_G['setting']['navs']['2']['navname'];?></a><a>&gt;</a><a><?php echo $_G['forum']['name'];?></a>
    </div>
</div>

<div class="kj_con">
    <div class="kj_right" style="height:auto; overflow:hidden; width:998px; padding-bottom:20px;">
        <div class="kj_ss">
            <p style="margin-bottom:20px;"><span>栏目：</span>
            <?php if(is_array($leftside['forums'])) foreach($leftside['forums'] as $upfid => $gdata) { ?>                <?php if(is_array($gdata['sub'])) foreach($gdata['sub'] as $subfid => $name) { ?>                <a <?php if($_G['fid'] == $subfid || $_G['forum']['fup'] == $subfid) { ?>style="color:#2778cc"<?php } ?> href="<?php if(!empty($_G['cache']['forums'][$subfid]['domain']) && !empty($_G['setting']['domain']['root']['forum'])) { ?>http://<?php echo $_G['cache']['forums'][$subfid]['domain'];?>.<?php echo $_G['setting']['domain']['root']['forum'];?><?php } else { ?>forum.php?mod=forumdisplay&fid=<?php echo $subfid;?><?php } ?>"><?php echo $name;?></a>
                <?php } ?>
            <?php } ?>
            </p>
            <p>
                <a class="cp_nav" style="color:#fff;" href="tz.html">发帖</a><a class="cp_nav" style="margin-left:30px; margin-right:350px;color:#fff;" href="tlzq_wdtz.html">我的帖子</a>
                <input name="" type="text" class="tz_select" />
                <select name="" class="kj_text" style="width:181px; margin-right:0px;">
                    <option>按最后回复排序</option>
                </select></p>
        </div>
        <table width="200" border="0" cellpadding="0" cellspacing="0" class="table">
            <tr>
                <th width="347"> 主题 </th>
                <th width="127">作者</th>
                <th width="235"> 回帖/人气</th>
                <th width="246">最后更新</th>
            </tr>
            <tr>
                <td><a href="tzbtnr.html" style="width:auto; border:none;">内容标题，内容标题，内容标题，内容标题，内容标题……</a></td>
                <td>邱晓琨</td>
                <td>20/320 </td>
                <td>2013-08-27 12:45:32</td>
            </tr>
            <tr>
                <td colspan="3" style="border-bottom:1px dashed #ccc;"><a style="background:#88c932; color:#fff;" class="sz">1</a><a class="sz">2</a><a class="sz">3</a><a class="sz">4</a></td>
                <td style="border-bottom:1px dashed #ccc;">贝贝妈妈</td>
            </tr>
            <tr>
                <td><a href="tzbtnr.html" style="width:auto; border:none;">内容标题，内容标题，内容标题，内容标题，内容标题……</a></td>
                <td>邱晓琨</td>
                <td>20/320 </td>
                <td>2013-08-27 12:45:32</td>
            </tr>
            <tr>
                <td colspan="3" style="border-bottom:1px dashed #ccc;"><a style="background:#88c932; color:#fff;" class="sz">1</a><a class="sz">2</a><a class="sz">3</a><a class="sz">4</a></td>
                <td style="border-bottom:1px dashed #ccc;">贝贝妈妈</td>
            </tr>
            <tr>
                <td><a href="tzbtnr.html" style="width:auto; border:none;">内容标题，内容标题，内容标题，内容标题，内容标题……</a></td>
                <td>邱晓琨</td>
                <td>20/320 </td>
                <td>2013-08-27 12:45:32</td>
            </tr>
            <tr>
                <td colspan="3" style="border-bottom:1px dashed #ccc;"><a style="background:#88c932; color:#fff;" class="sz">1</a><a class="sz">2</a><a class="sz">3</a><a class="sz">4</a></td>
                <td style="border-bottom:1px dashed #ccc;">贝贝妈妈</td>
            </tr>
            <tr>
                <td><a href="tzbtnr.html" style="width:auto; border:none;">内容标题，内容标题，内容标题，内容标题，内容标题……</a></td>
                <td>邱晓琨</td>
                <td>20/320 </td>
                <td>2013-08-27 12:45:32</td>
            </tr>
            <tr>
                <td colspan="3" style="border-bottom:1px dashed #ccc;"><a style="background:#88c932; color:#fff;" class="sz">1</a><a class="sz">2</a><a class="sz">3</a><a class="sz">4</a></td>
                <td style="border-bottom:1px dashed #ccc;">贝贝妈妈</td>
            </tr>
            <tr>
                <td><a href="tzbtnr.html" style="width:auto; border:none;">内容标题，内容标题，内容标题，内容标题，内容标题……</a></td>
                <td>邱晓琨</td>
                <td>20/320 </td>
                <td>2013-08-27 12:45:32</td>
            </tr>
            <tr>
                <td colspan="3"><a style="background:#88c932; color:#fff;">1</a><a>2</a><a>3</a><a>4</a></td>
                <td>贝贝妈妈</td>
            </tr>
        </table>
        <div class="tab1" style="margin-top:20px;">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">7</a>
            <a href="#">8</a>
            <a href="#">9</a>
            <a href="#">10</a>
            <select name="" class="z_ym">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
            <span>共10页 </span>
        </div></div>

</div>
</div><?php include template('common/footer'); ?>