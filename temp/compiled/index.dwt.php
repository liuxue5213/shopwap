<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.js,jd_index.js')); ?>
<div class="w">
  <div id="o-slide"> <?php echo $this->fetch('library/index_ad.lbi'); ?> 
    
    <div class="jscroll" id="mscroll">
      <div class="ctrl" id="mscroll-ctrl-prev"><b></b></div>
      <div class="ctrl" id="mscroll-ctrl-next"><b></b></div>
      <div class="o-list">
        <div class="list" id="mscroll-list">
          <ul class="mscroll-ul" >
            
<?php $this->assign('ads_id','2'); ?><?php $this->assign('ads_num','9'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

          </ul>
        </div>
      </div>
    </div>
     
  </div>
  <div class="m fr da0x70"> 
<?php $this->assign('ads_id','1'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
</div>
  
  
  <div id="jdnews" class="m m1"> 
<?php $this->assign('articles',$this->_var['articles_12']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_12']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>
 </div>
  
  
  <div class="m _520_a_lifeandjourney_1 hover" id="virtuals">
    <div class="mt">
      <ul class="fore1 lh">
        <li class="fore1 abtest_huafei current"><a href="javascript:;"><s></s>活动<i></i></a></li>
        <li class="fore2 abtest_lvxing"><a href="javascript:;"><s></s>发货单<i></i></a></li>
        <li class="fore3 abtest_caipiao"><a href="javascript:;"><s></s>订单<i></i></a></li>
        <li class="fore4 abtest_youxi"><a href="javascript:;"><s></s>投票<i></i></a></li>
      </ul>
    </div>
    <div class="mc" style="position:absolute;">
      <div class="virtuals-iframes">
        <div class="virtuals-w"> 
<?php $this->assign('ads_id','3'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </div>
        <div class="virtuals-s"> 
<?php $this->assign('ads_id','6'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </div>
      </div>
      <div class="virtuals-iframes" id="txtMarquee-top"> 
<?php echo $this->fetch('library/invoice_query.lbi'); ?>
 </div>
      <div class="virtuals-iframes"> 
<?php echo $this->fetch('library/order_query.lbi'); ?>
 </div>
      <div class="virtuals-iframes"> 
<?php echo $this->fetch('library/vote_list.lbi'); ?>
 </div>
    </div>
  </div>
  
   
</div>
<Div class="clear"></Div>
<div id="showcase" class="w advanced">
  <div class="m">
    <div class="mt"> 
      
      <h2>生活的橱窗</h2>
      <img height="24" src="themes/swdefault/images/shenghuochuchuang.png"> 
       
    </div>
    <div class="mc">
      <div class="sc-list clearfix">
        <div class="item w-bg"> <?php 
$k = array (
  'name' => 'ads_pro',
  'type' => '生活橱窗广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
        <div class="item "> <?php 
$k = array (
  'name' => 'ads_pro',
  'type' => '生活橱窗广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
        <div class="item w-bg"> <?php 
$k = array (
  'name' => 'ads_pro',
  'type' => '生活橱窗广告3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
        <div class="item tuangou"> <?php 
$k = array (
  'name' => 'ads_pro',
  'type' => '生活橱窗广告4',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
        <div class="item "> <?php 
$k = array (
  'name' => 'ads_pro',
  'type' => '生活橱窗广告5',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
        <div class="item w-bg"> <?php 
$k = array (
  'name' => 'ads_pro',
  'type' => '生活橱窗广告6',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
        <div class="item "> <?php 
$k = array (
  'name' => 'ads_pro',
  'type' => '生活橱窗广告7',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
        <div class="item w-bg"> <?php 
$k = array (
  'name' => 'ads_pro',
  'type' => '生活橱窗广告8',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
      </div>
      <div id="showcase-promotion-1" class="sc-bottom" style="display: block; ">
        <div class="item"> 
 
 </div>
      </div>
    </div>
  </div>
</div>
<div id="floors-list">
   
<?php $this->assign('cat_goods',$this->_var['cat_goods_2']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_2']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_4']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_4']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_6']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_6']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_7']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_7']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_5']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_5']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_11']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_11']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_13']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_13']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

</div>

<div class="w">
<div class="m m3 club" id="share">
<div class="mt">
<h2>热门晒单</h2>
<div class="extra"></div>
</div>
<div class="mc">
<ul>
<?php $_from = $this->_var['index_comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['no']['iteration']++;
?>
	<?php if ($this->_foreach['no']['iteration'] < 7): ?>
<li style="height: 60px; display: list-item; ">
  <div class="p-img ld">
    <a href="<?php echo $this->_var['comments']['url']; ?>" target="_blank" title="<?php echo $this->_var['comments']['goods_name']; ?>"><img width="50" height="50" alt="<?php echo $this->_var['comments']['goods_name']; ?>" src="<?php echo $this->_var['comments']['goods_thumb']; ?>"><b class="ci cix1"></b></a>  </div>
  <div class="p-name"><a href="<?php echo $this->_var['comments']['url']; ?>" target="_blank" title="<?php echo $this->_var['comments']['goods_name']; ?>"><?php echo $this->_var['comments']['goods_name']; ?></a></div>
  <div class="p-detail"><a href="<?php echo $this->_var['comments']['url']; ?>" target="_blank"><?php echo $this->_var['comments']['content']; ?></a></div>
</li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

</ul>
</div>
</div>
<div class="m m3 club" id="index_comment">
<div class="mt">
<h2>热门晒单</h2>
<div class="extra"></div>
</div>
<div class="mc">
<ul>
<?php $_from = $this->_var['index_comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comments');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['comments']):
        $this->_foreach['no']['iteration']++;
?>
	<?php if ($this->_foreach['no']['iteration'] > 6 && $this->_foreach['no']['iteration'] < 13): ?>
<li style="height: 60px; display: list-item; ">
  <div class="p-img ld">
    <a href="<?php echo $this->_var['comments']['url']; ?>" target="_blank" title="<?php echo $this->_var['comments']['goods_name']; ?>"><img width="50" height="50" alt="<?php echo $this->_var['comments']['goods_name']; ?>" src="<?php echo $this->_var['comments']['goods_thumb']; ?>"><b class="ci cix1"></b></a>  </div>
  <div class="p-name"><a href="<?php echo $this->_var['comments']['url']; ?>" target="_blank" title="<?php echo $this->_var['comments']['goods_name']; ?>"><?php echo $this->_var['comments']['goods_name']; ?></a></div>
  <div class="p-detail"><a href="<?php echo $this->_var['comments']['url']; ?>" target="_blank"><?php echo $this->_var['comments']['content']; ?></a></div>
</li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>
</div>
<?php echo $this->fetch('library/new_articles.lbi'); ?>
<div class="m" id="subscription" clstag="homepage|keycount|home2013|36a">
<div class="mt">
<h2>订阅促销信息</h2>
</div>
<?php echo $this->fetch('library/email_list.lbi'); ?>
</div>
<span class="clr"></span>
</div>

<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
