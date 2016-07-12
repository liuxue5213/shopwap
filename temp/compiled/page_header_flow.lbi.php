<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jd_common_flow.js,easydialog.min.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,jquery.SuperSlide.js')); ?>
<div id="shortcut">
  <div class="w">
    <ul class="fl lh">
      <li class="fore1 ld"><b></b><a href="javascript:addToFavorite()" rel="nofollow">收藏商城</a></li>
    </ul>
    <ul class="fr lh">
      <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
      <li class="fore2 ld"> <s></s> <a href="user.php?act=order_list">我的订单</a> </li>

      <li class="fore4 ld menu" id="biz-service"> <s></s> <span class="outline"></span> <span class="blank"></span> 客户服务 <b></b>
        <div class="dd">
          <div><a href="#" target="_blank">帮助中心</a></div>
          <div><a href="#" target="_blank" rel="nofollow">售后服务</a></div>
          <div><a href="#" target="_blank" rel="nofollow">在线客服</a></div>
          <div><a href="#" target="_blank" rel="nofollow">投诉中心</a></div>
          <div><a href="#" target="_blank">客服邮箱</a></div>
        </div>
      </li>
    </ul>
  </div>
</div>
<div class="w w1 header clearfix">
	<div id="logo"><a href="./index.php"><img src="themes/swdefault/images/logo.gif" title="返回商城商城首页" alt="返回商城商城首页"></a></div>
    
	<div class="progress clearfix">
		<ul <?php if ($this->_var['step'] == "cart"): ?>class="progress-1"<?php endif; ?>  <?php if ($this->_var['step'] == "consignee"): ?>class="progress-2"<?php endif; ?>       <?php if ($this->_var['step'] == "checkout"): ?>class="progress-2"<?php endif; ?>         <?php if ($this->_var['step'] == "done"): ?>class="progress-3"<?php endif; ?>   <?php if ($this->_var['step'] == "login"): ?>class="progress-2"<?php endif; ?>>
			<li class="step-1"><b></b>1.我的购物车</li>
			<li class="step-2"><b></b>2.填写核对订单信息</li>
			<li class="step-3">3.成功提交订单</li>
		</ul>
	</div>
</div>