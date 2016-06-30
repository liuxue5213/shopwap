{include file="pageheader"}

<table id="list-table" class="table table-bordered table-striped table-hover">
  <tr class="active">
    <th class="text-center">{$lang['ad_name']}</th>
    <th class="text-center">{$lang['ad_position']}</th>
    <th class="text-center">{$lang['media_type']}</th>
	<th class="text-center">{$lang['ad_code_img']}</th>
    <th class="text-center">{$lang['start_time']}</th>
    <th class="text-center">{$lang['end_time']}</th>
    <th class="text-center">{$lang['click_count']}</th>
    <th class="text-center">{$lang['orders']}</th>
    <th class="text-center">{$lang['handler']}</th>
  </tr>
  {loop $list $key $vo}
  <tr>
    <td class="text-center"><a href="{url('ad_edit', array('id'=>$vo['ad_id']))}">{$vo['ad_name']}</a></td>
    <td class="text-center">{$vo['position_name']}</td>
    <td class="text-center">{$vo['media_type']}</td>
	<td class="text-center"><a href="javascript:;" onClick="showImg('ad_img_layer', '{$lang['ad_img']}')"><img src="{$vo['ad_code']}" width="100" title="{$lang['ad_code_img']}"></a><div id="ad_img_layer" style="display:none"><img src="{$vo['ad_code']}" border="0" /></div></td>
    <td class="text-center">{$vo['start_time']}</td>
    <td class="text-center">{$vo['end_time']}</td>
    <td class="text-center">{$vo['click_count']}</td>
    <td class="text-center">{$vo['orders']}</td>
    <td class="text-center"><a href="{url('ad_edit', array('id'=>$vo['ad_id']))}">{$lang['edit']}</a> | <a href="{url('ad_del', array('id'=>$vo['ad_id']))}">{$lang['remove']}</a></td>
  </tr>
  {/loop}
</table>

{include file="pageview"}

{include file="pagefooter"}