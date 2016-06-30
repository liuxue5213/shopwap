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
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'jd_category.js')); ?>
<div class="w">
  <div class="breadcrumb">
    <h1><a href="<?php echo $this->_var['cat_info']['url']; ?>"><?php echo $this->_var['cat_info']['cat_name']; ?></a></h1>
    <span> &nbsp;&nbsp;&nbsp; 
    
    <?php $_from = $this->_var['categories_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['foo']['iteration']++;
?> 
    
    <a target="_blank" href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a> <?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>&nbsp;|&nbsp;<?php endif; ?> 
    
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    
    </span> </div>
  
  <div class="clr"></div>
</div>
<div class="w">
  <div class="left">
    <div id="sortlist" class="m">
      <div class="mt">
        <h2><?php echo $this->_var['cat_info']['cat_name']; ?></h2>
      </div>
      <div class="mc"> 
        <?php $_from = $this->_var['categories_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['foo']['iteration']++;
?> 
        <?php if ($this->_foreach['foo']['iteration'] < 7): ?>
        <div class="item fore<?php echo $this->_foreach['foo']['iteration']; ?>">
          <h3> <a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a> </h3>
          <div class="con"> 
            <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['foo2']['iteration']++;
?> 
            <?php if ($this->_foreach['foo2']['iteration'] < 5): ?> <a href="<?php echo $this->_var['childer']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['childer']['name']); ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a> <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            
            <span class="clr"></span> </div>
        </div>
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        
      </div>
    </div>
  </div>
  <div class="middle">
    <div class="slide" id="slide">
      <ul class="slide-items">
       
        <li> <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat_info']['cat_name'],
  'type' => '顶级分类页幻灯片广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
        <li> <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat_info']['cat_name'],
  'type' => '顶级分类页幻灯片广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
        <li> <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat_info']['cat_name'],
  'type' => '顶级分类页幻灯片广告3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
        <li> <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat_info']['cat_name'],
  'type' => '顶级分类页幻灯片广告4',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
        <li> <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat_info']['cat_name'],
  'type' => '顶级分类页幻灯片广告5',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
        
      </ul>
     
      
      <div class="slide-controls"><span>1</span><span>2</span><span>3</span><span>4</span><span>5</span></div>
    
    </div>
    <div id="bargain" class="m"> 
      <?php $_from = $this->_var['cat_best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_child');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods_child']):
        $this->_foreach['foo']['iteration']++;
?> 
      <?php if ($this->_foreach['foo']['iteration'] < 5): ?>
      <div class="fore<?php echo $this->_foreach['foo']['iteration']; ?><?php if ($this->_foreach['foo']['iteration'] == 1): ?> curr<?php endif; ?> cat-tab-item">
        <div class="mt">
          <h2><?php echo $this->_var['goods_child']['cat_name']; ?></h2>
        </div>
        <div class="mc">
          <ul>
            <?php $_from = $this->_var['goods_child']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo2']['iteration']++;
?> 
            <?php if ($this->_foreach['foo2']['iteration'] < 6): ?>
            <li class="fore<?php echo $this->_foreach['foo2']['iteration']; ?>">
              <div class="p-img"> <a target="_blank" title="<?php echo $this->_var['goods']['name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>"> <img width="160" height="160" alt="<?php echo $this->_var['goods']['name']; ?>" src="<?php echo $this->_var['goods']['thumb']; ?>"> </a> </div>
              <div class="p-name"> <a target="_blank" title="<?php echo $this->_var['goods']['name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?>
              
              </a> <font class="sku1150076" color="#ff6600"><a target="blank" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['brief']; ?></a></font></div>
              <div class="p-price"> <?php echo $this->_var['lang']['shop_prices']; ?>：<strong><?php if ($this->_var['goods']['promote_price'] != ''): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></strong> </div>
            </li>
            <?php endif; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            
          </ul>
        </div>
      </div>
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
  </div>
  <div class="right">
    <div id="bulletin" class="m">  <?php $this->assign('articles',$this->_var['articles_11']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_11']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>  </div>
    
    <div id="limitbuy" class="m">  <?php echo $this->fetch('library/recommend_promotion.lbi'); ?>  </div>
     
    
  </div>
  <div class="clr"></div>
</div>
<div class="w">
  <div class="scroll m">
    <div id="prev1" class="btns disabled"></div>
    <div id="next1" class="btns"></div>
    <div class="con" style="position: relative; width: 1161px; height: 32px; overflow: hidden; ">
      <ul>
        <?php $_from = $this->_var['brands1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['foo']['iteration']++;
?> 
  
        <li> <a target="_blank" href="<?php echo $this->_var['brand']['url']; ?>" title="<?php echo $this->_var['brand']['brand_name']; ?>"> <?php if ($this->_var['brand']['brand_logo']): ?> <img width="90" height="28" src="data/brandlogo/<?php echo $this->_var['brand']['brand_logo']; ?>"> <?php else: ?>
          <?php echo $this->_var['brand']['brand_name']; ?>
          <?php endif; ?> </a> </li>

        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        
      </ul>
    </div>
  </div>
</div>
<?php $_from = $this->_var['on_top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'top_goods_0_68753000_1430731743');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['top_goods_0_68753000_1430731743']):
        $this->_foreach['foo']['iteration']++;
?>
<div class="w">
  <div id="floor<?php echo $this->_foreach['foo']['iteration']; ?>" class="m floor_cat_top">
    <div class="mt">
      <h2><?php echo $this->_var['top_goods_0_68753000_1430731743']['cat_name']; ?></h2>
      <div class="extra"> 
        <?php $_from = $this->_var['top_goods_0_68753000_1430731743']['child_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['foo2']['iteration']++;
?> 
        <a target="_blank" title="<?php echo $this->_var['cat']['cat_name']; ?>" href="<?php echo $this->_var['cat']['url']; ?>"><?php echo $this->_var['cat']['cat_name']; ?></a> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      </div>
    </div>
    <div class="mc" data-widget="tabs">
      <div class="fore1 tabcon">
        <div class="omc" id="rfid2870"> 
          <?php $_from = $this->_var['top_goods_0_68753000_1430731743']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo2']['iteration']++;
?> 
          <?php if ($this->_foreach['foo2']['iteration'] == 1): ?>
          <div class="fore-big">
            <div class="p-img"> <a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><img width="280" height="280" alt="<?php echo $this->_var['goods']['name']; ?>" src="<?php echo $this->_var['goods']['goods_img']; ?>" class="err-product"></a> </div>
            <div class="p-info">
              <div class="p-name"><a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></div>
              <div class="p-price" sku="1027317"><strong><?php if ($this->_var['goods']['promote_price']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></strong></div>
              <div class="p-market"><del><?php echo $this->_var['goods']['market_price']; ?></del></div>
              <div class="p-sale">热卖</div>
              <div class="goumai"><a target="_blank" href="javascript:addToCart(<?php echo $this->_var['goods']['id']; ?>)">立即购买</a></div>
            </div>
          </div>
          <?php endif; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
          <div class="con">
            <ul>
              <?php $_from = $this->_var['top_goods_0_68753000_1430731743']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo2']['iteration']++;
?> 
              <?php if ($this->_foreach['foo2']['iteration'] > 1 && $this->_foreach['foo2']['iteration'] < 8): ?>
              <li>
                <div class="p-img"> <a target="_blank" title="<?php echo $this->_var['goods']['name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>"> <img width="130" height="130" alt="<?php echo $this->_var['goods']['name']; ?>" src="<?php echo $this->_var['goods']['thumb']; ?>"> </a> </div>
                <div class="p-name"> <a target="_blank" title="<?php echo $this->_var['goods']['name']; ?>" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?><font class="sku1034404" color="#ff6600"><a target="blank" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['brief']; ?>/a></font></a> </div>
                <div class="p-price"> <strong><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></strong> <del><?php echo $this->_var['goods']['market_price']; ?></del> </div>
              </li>
              <?php endif; ?> 
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <div id="floor<?php echo $this->_foreach['foo']['iteration']; ?>-top" class="m top1">
    <div class="mt">
      <h2>排行榜</h2>
      <ul class="tab">
        <?php $_from = $this->_var['top_goods_0_68753000_1430731743']['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'top10');$this->_foreach['foo3'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo3']['total'] > 0):
    foreach ($_from AS $this->_var['top10']):
        $this->_foreach['foo3']['iteration']++;
?> 
        <?php if ($this->_foreach['foo3']['iteration'] < 4): ?>
        <li class="<?php if ($this->_foreach['foo3']['iteration'] == 1): ?>curr<?php endif; ?>" ><?php echo $this->_var['top10']['cat_name']; ?></li>
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
    <div class="mc"> 
      <?php $_from = $this->_var['top_goods_0_68753000_1430731743']['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'top10_goods');$this->_foreach['foo4'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo4']['total'] > 0):
    foreach ($_from AS $this->_var['top10_goods']):
        $this->_foreach['foo4']['iteration']++;
?>
      <?php if ($this->_foreach['foo4']['iteration'] < 4): ?>
      <ul class="tabcon<?php if ($this->_foreach['foo4']['iteration'] > 1): ?> hide<?php endif; ?>">
        
        <?php $_from = $this->_var['top10_goods']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo5'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo5']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo5']['iteration']++;
?> 
         <?php if ($this->_foreach['foo5']['iteration'] < 6): ?>
        <li class="fore<?php echo $this->_foreach['foo5']['iteration']; ?> fore"><span class="i<?php echo $this->_foreach['foo5']['iteration']; ?>"><?php echo $this->_foreach['foo5']['iteration']; ?></span>
          <div class="p-img"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['goods_name']; ?>"><img width="50" height="50" alt="<?php echo $this->_var['goods']['goods_name']; ?>" src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></a></div>
          <div class="p-name"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['goods_name']; ?>"><?php echo $this->_var['goods']['goods_name']; ?></a><font color="#ff6600"></font></div>
          <div class="p-price"><strong><?php echo $this->_var['goods']['price']; ?></strong></div>
        </li>
         <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        
      </ul>
       <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      
    </div>
  </div>
  
  
  <div class="clr"></div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<div class="w" style="display:none;">
  <div id="single-choice" class="m">
    <div class="mt">
      <h2>精品晒单</h2>
    </div>
    <div class="mc">
      <div id="prev2" class="btns disabled" style="display: none; "></div>
      <div id="next2" class="btns disabled" style="display: none; "></div>
      <div class="con">
        <ul>
            <li>
            <div class="p-img"> <a title="德意烟灶" target="_blank" href="#"> <img width="160" height="160" src="#" alt="德意烟灶" data-img="1"> </a> </div>
            <div class="p-name"> <a title="德意烟灶" target="_blank" href="#">德意烟灶</a> </div>
          </li>
            <div class="p-img"> <a title="德意烟灶" target="_blank" href="#"> <img width="160" height="160" src="#" alt="德意烟灶" data-img="1"> </a> </div>
            <div class="p-name"> <a title="德意烟灶" target="_blank" href="#">德意烟灶</a> </div>
          </li>
           <li>
            <div class="p-img"> <a title="德意烟灶" target="_blank" href="#"> <img width="160" height="160" src="#" alt="德意烟灶" data-img="1"> </a> </div>
            <div class="p-name"> <a title="德意烟灶" target="_blank" href="#">德意烟灶</a> </div>
          </li>
              <li>
            <div class="p-img"> <a title="德意烟灶" target="_blank" href="#"> <img width="160" height="160" src="#" alt="德意烟灶" data-img="1"> </a> </div>
            <div class="p-name"> <a title="德意烟灶" target="_blank" href="#">德意烟灶</a> </div>
          </li>
            <li>
            <div class="p-img"> <a title="德意烟灶" target="_blank" href="#"> <img width="160" height="160" src="#" alt="德意烟灶" data-img="1"> </a> </div>
            <div class="p-name"> <a title="德意烟灶" target="_blank" href="#">德意烟灶</a> </div>
          </li>
          <li>
            <div class="p-img"> <a title="德意烟灶" target="_blank" href="#"> <img width="160" height="160" src="#" alt="德意烟灶" data-img="1"> </a> </div>
            <div class="p-name"> <a title="德意烟灶" target="_blank" href="#">德意烟灶</a> </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php echo $this->fetch('library/help.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>