<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jd_common.js,easydialog.min.js')); ?>
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
<div id="o-header">
<div id="top-banner" class="w" style="height: 70px; margin: 2px auto 0px; position: relative; ">
<div class="banner_w">
<?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => '',
  'type' => '顶部横幅广告（宽）',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>

</div>

<div class="banner_s">
<?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => '',
  'type' => '顶部横幅广告（窄）',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>

</div>
<div style="position:absolute;top:0px;right:0px;width:25px;height:25px;background:#fff;filter:alpha(opacity=0);opacity:0;cursor:pointer" onclick="document.getElementById('top-banner').style.display='none'"></div>
</div>




  <div class="w" id="header">
    <div id="logo" class="ld"><a href="./index.php" hidefocus="true" ><b></b><img src="themes/swdefault/images/logo.gif" width="270" height="60" alt="logo"></a></div>
    
    <div id="search">
      <div class="i-search ld">
        <ul id="shelper" class="hide">
        </ul>
        <div class="form">
          <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
            <input type="text" class="text" accesskey="s" id="key" autocomplete="off" name="keywords" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>">
            <input type="submit" value="搜索" class="button">
          </form>
        </div>
      </div>
      <?php if ($this->_var['searchkeywords']): ?>
      <div id="hotwords"><strong>热门搜索：</strong> <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['val']):
        $this->_foreach['foo']['iteration']++;
?>
        <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?> <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" target="_blank" style="color:#ff0000"><?php echo $this->_var['val']; ?></a> <?php else: ?> <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" target="_blank"><?php echo $this->_var['val']; ?></a> <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
      <?php endif; ?> </div>
    
    <div id="my360buy">
      <dl>
        <dt class="ld"><s></s><a href="user.php">我的商城</a><b></b></dt>
        <dd>
          <div class="prompt"> <span class="fl"><strong></strong></span> <span class="fr"><a href="user.php">去我的商城首页&nbsp;&gt;</a></span> </div>
          <div id="jduc-orderlist">
            <div class="orderlist">
              <div class="smt">
                <h4>最新订单状态：</h4>
                <div class="extra"><a href="user.php?act=order_list" target="_blank">查看所有订单&nbsp;&gt;</a></div>
              </div>
              <div class="smc">
                <ul>
                </ul>
              </div>
            </div>
          </div>
          <div class="uclist">
            <ul class="fore1 fl">
              <li><a target="_blank" href="user.php?act=address_list">收货地址&nbsp;&gt;</a></li>
              <li><a target="_blank" href="user.php?act=booking_list">缺货登记&nbsp;&gt;</a></li>
              <li><a target="_blank" href="user.php?act=profile">用户信息&nbsp;&gt;</a></li>
              <li><a target="_blank" href="user.php?act=collection_list">我的收藏&nbsp;&gt;</a></li>
            </ul>
            <ul class="fore2 fl">
              <li><a target="_blank" href="user.php?act=message_list">我的留言&nbsp;&gt;</a></li>
              <li><a target="_blank" href="user.php?act=comment_list">我的评论&nbsp;&gt;</a></li>
              <li><a target="_blank" href="user.php?act=bonus">我的红包&nbsp;&gt;</a></li>
              <li><a target="_blank" href="user.php?act=bonus">资金管理&nbsp;&gt;</a></li>
            </ul>
          </div>
          
          <div class="viewlist" id="history_div">
            <div class="smt">
              <h4>最近浏览的商品：</h4>
            </div>
            <div class="smc" id="jduc-viewlist">
              <ul class="lh hide" style="display: block;" id="history_list">
                	 <?php 
$k = array (
  'name' => 'history2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
              </ul>
            </div>
          </div>
			<script type="text/javascript">
            if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
            {
                document.getElementById('history_div').style.display='none';
            }
            else
            {
                document.getElementById('history_div').style.display='block';
            }
            function clear_history()
            {
            Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
            }
            function clear_history_Response(res)
            {
            document.getElementById('history_list').innerHTML = '<center><?php echo $this->_var['lang']['no_history']; ?></center>';
            }
            </script>
          
        </dd>
      </dl>
    </div>
    
    <div id="ECS_CARTINFO" class="settleup">
       <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    </div>
     
  </div>
  <div class="w">
    <div id="nav">
      <div id="categorys" class="categorys <?php if ($this->_var['script_name'] != 'index'): ?>no_index<?php endif; ?>">
        <div class="mt ld">
          <h2><a href="javascript:;">全部商品分类<b></b></a></h2>
        </div>
        <div id="_JD_ALLSORT" class="mc">
             <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['foo']['iteration']++;
?>
          <div class="item fore<?php echo $this->_foreach['foo']['iteration']; ?>"> <span>
            <h3><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></h3>
            <s></s></span>
            <div class="i-mc" style="top: 3px; ">
              <div onclick="$(this).parent().parent().removeClass('hover')" class="close">×</div>
              <div class="subitem">
              
                <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['foo2']['iteration']++;
?>
                <dl class="fore<?php echo $this->_foreach['foo2']['iteration']; ?>">
                  <dt><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></dt>
                  <dd> <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?> <em><a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a></em><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </dd>
                </dl>
                
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    
              </div>
              <div class="cat-right-con fr" id="JD_sort_a">
                <dl class="categorys-promotions">
                  <dd>
                    <ul>
                      <li> <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat']['name'],
  'type' => '左侧导航广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </li>
                      <li> <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat']['name'],
  'type' => '左侧导航广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </li>
                    </ul>
                  </dd>
                </dl>
                <dl class="categorys-brands">
                  <dt>推荐品牌</dt>
                  <dd>
                    <ul>
                      <?php $_from = $this->_var['cat']['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brands');$this->_foreach['brands_no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brands_no']['total'] > 0):
    foreach ($_from AS $this->_var['brands']):
        $this->_foreach['brands_no']['iteration']++;
?>
                       <?php if ($this->_foreach['brands_no']['iteration'] < 19): ?>
                      <li><a href="<?php echo $this->_var['brands']['url']; ?>" target="_blank"><?php echo $this->_var['brands']['brand_name']; ?></a></li>
                      <?php endif; ?>
 					 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
			 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
        </div>
      </div>
      <ul id="navitems">
      
            <li class="fore1 <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?>curr<?php endif; ?>"><a href="./index.php"><?php echo $this->_var['lang']['home']; ?></a></li>
  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['foo']['iteration']++;
?>
  <li class="fore<?php echo $this->_foreach['foo']['iteration']; ?> <?php if ($this->_var['nav']['active'] == 1): ?>curr<?php endif; ?>"><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li>

 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
      
     
      </ul>
    </div>
  </div>
</div>