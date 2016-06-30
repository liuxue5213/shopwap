<div class="w w1">
    <div class="m m1 catalogue">
      <div class="mt ld">
        <div class="floor"><b class="fixpng b b1"></b><b class="fixpng b b2" style="height: 34px; display: block; "></b><b class="b b3"><?php echo $this->_var['goods_cat']['sort_order']; ?>F</b><b class="fixpng b4"></b></div>
        <h2><?php echo $this->_var['goods_cat']['name']; ?></h2>
      </div>
      <div class="mc">
        <div class="style1">
          <ul class="lh">
            <?php $_from = $this->_var['goods_cat']['cat_clild']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_64391400_1430569616');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_64391400_1430569616']):
        $this->_foreach['foo']['iteration']++;
?>
            <?php if ($this->_foreach['foo']['iteration'] < 17): ?>
            <li><a href="<?php echo $this->_var['cat_0_64391400_1430569616']['url']; ?>"><?php echo $this->_var['cat_0_64391400_1430569616']['name']; ?></a></li>
            <?php endif; ?>
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
          </ul>
          <span> 
     
        <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品左广告',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
          
          </span> </div>
      </div>
    </div>

    <div class="m plist">
      <div class="tab-arrow" style="left: 0px; "><b></b></div>
       <?php $_from = $this->_var['goods_cat']['goods_level2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_level2');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods_level2']):
        $this->_foreach['foo']['iteration']++;
?>
       <?php if ($this->_foreach['foo']['iteration'] < 6): ?>
       <?php if ($this->_foreach['foo']['iteration'] == 1): ?>
      <div class="tab-item sm sm2 fore<?php echo $this->_foreach['foo']['iteration']; ?> curr">
        <div class="smt">
          <h3><?php echo $this->_var['goods_level2']['name']; ?></h3>
        </div>
        <div class="smc" data-widget="tab-content"> 
          
          <div class="slide" id="cat_slide_<?php echo $this->_var['goods_cat']['id']; ?>">
            <div class="slide-itemswrap">
              <div class="slide-items">
                <div><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品大广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
                <div><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品大广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
                <div><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品大广告3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
                <div><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品大广告4',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
              </div>
            </div>
            <div class="slide-controls"> <span class="curr"><b></b></span> <span class=""><b></b></span> <span class=""><b></b></span> <span class=""><b></b></span></div>
          </div>
          
          <ul class="lh style1">
           <?php $_from = $this->_var['goods_level2']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo2']['iteration']++;
?>
           <?php if ($this->_foreach['foo2']['iteration'] < 10): ?>
            <li class="fore<?php echo $this->_foreach['foo2']['iteration']; ?>">
              <div class="p-img" style="opacity: 1; "> <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['goods_name']; ?>"><img width="100" height="100" alt="<?php echo $this->_var['goods']['goods_name']; ?>" src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></a></div>
              <div class="p-name"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['goods_name']; ?>"><?php echo $this->_var['goods']['short_name']; ?></a></div>
              <div class="p-price"><span style="display:block;height:1.5em;overflow:hidden;"><?php if ($this->_var['goods']['promote_price'] > 0): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span></div>
            </li>
            <?php endif; ?>
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
      </div>
      <?php else: ?>
      <div class="tab-item sm sm2 fore<?php echo $this->_foreach['foo']['iteration']; ?>">
        <div class="smt">
          <h3><?php echo $this->_var['goods_level2']['name']; ?></h3>
        </div>
        <div class="smc" data-widget="tab-content">
          <ul class="lh style3">
          <?php $_from = $this->_var['goods_level2']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo2']['iteration']++;
?>
            <li class="fore1">
              <div class="p-img ld"><a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo $this->_var['goods']['goods_name']; ?>"><img height="100" width="100" alt="<?php echo $this->_var['goods']['goods_name']; ?>" src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></a></div>
              <div class="p-name"><a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo $this->_var['goods']['goods_name']; ?>"><?php echo $this->_var['goods']['short_name']; ?></a></div>
              <div class="p-price"><span><?php if ($this->_var['goods']['promote_price'] > 0): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></span></div>
            </li>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
      </div>
      <?php endif; ?>
      <?php endif; ?>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   
    </div>
    
    <div class="sm sm1 brands">
      <div class="smt">
        <h3 style="text-indent:145px;">推荐品牌</h3>
        <div class="extra"></div>
      </div>
      <div class="smc">
        <ul class="lh">
        <?php $_from = $this->_var['goods_cat']['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brands_0_64391400_1430569616');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['brands_0_64391400_1430569616']):
        $this->_foreach['foo']['iteration']++;
?>  
          <li class="fore<?php echo $this->_foreach['foo']['iteration']; ?>"><a target="_blank" href="<?php echo $this->_var['brands_0_64391400_1430569616']['url']; ?>"><?php if ($this->_var['brands_0_64391400_1430569616']['logo'] != "data/brandlogo/"): ?><img height="35" width="98" src="<?php echo $this->_var['brands_0_64391400_1430569616']['logo']; ?>"><?php else: ?><?php echo $this->_var['brands_0_64391400_1430569616']['brand_name']; ?><?php endif; ?></a></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
    </div>
    <div class="fr da209x180">
      <div class="slide" id="brand_slide_<?php echo $this->_var['goods_cat']['id']; ?>">
        <div class="slide-itemswrap">
          <div class="slide-items">
            <div><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品小广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
            <div><?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['goods_cat']['name'],
  'type' => '分类下商品小广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
          </div>
        </div>
        <div class="slide-controls"> <span class="curr"><b></b></span> <span class=""><b></b></span></div>
      </div>
    </div>
    <input type="hidden" name="cat_goods" class="cat_goods" value="<?php echo $this->_var['goods_cat']['id']; ?>"/>
    <div class="clear"></div>
  </div>