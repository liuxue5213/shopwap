<?php if ($this->_var['promotion_goods']): ?>
<?php if ($this->_var['script_name'] == 'category_top'): ?>
	    <div class="mt">
        <h2>限时抢购</h2>
      </div>
      <div class="mc">
        <ul>
         <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_69953900_1430731743');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_69953900_1430731743']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
          <li>
            <div class="clock endtime" value="<?php echo $this->_var['goods_0_69953900_1430731743']['end_date']; ?>"></div>
            <div class="p-img"><a href="<?php echo $this->_var['goods_0_69953900_1430731743']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_69953900_1430731743']['name']); ?>" target="_blank"><img width="100" height="100" src="<?php echo $this->_var['goods_0_69953900_1430731743']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_69953900_1430731743']['name']); ?>"></a></div>
            <div class="p-name"><a href="<?php echo $this->_var['goods_0_69953900_1430731743']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_69953900_1430731743']['name']); ?>" target="_blank"><?php echo htmlspecialchars($this->_var['goods_0_69953900_1430731743']['short_name']); ?></a></div>
            <div class="p-price"> <?php echo $this->_var['lang']['promote_price']; ?><strong><?php echo $this->_var['goods_0_69953900_1430731743']['promote_price']; ?></strong></div>
          </li>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
        </ul>
      </div>
<?php else: ?>
<div id="sales" class="f_l clearfix">
      <h1><a href="search.php?intro=promotion"><img src="themes/swdefault/images/more.gif" /></a></h1>
       <div class="clearfix goodBox">
         <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_69983700_1430731743');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_69983700_1430731743']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
         <?php if (($this->_foreach['promotion_foreach']['iteration'] - 1) <= 3): ?>
           <div class="goodList">
           <a href="<?php echo $this->_var['goods_0_69983700_1430731743']['url']; ?>"><img src="<?php echo $this->_var['goods_0_69983700_1430731743']['thumb']; ?>" border="0" alt="<?php echo htmlspecialchars($this->_var['goods_0_69983700_1430731743']['name']); ?>"/></a><br />
					 <p><a href="<?php echo $this->_var['goods_0_69983700_1430731743']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_69983700_1430731743']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_69983700_1430731743']['short_name']); ?></a></p>
           <?php echo $this->_var['lang']['promote_price']; ?><font class="f1"><?php echo $this->_var['goods_0_69983700_1430731743']['promote_price']; ?></font>
           </div>
         <?php endif; ?>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </div>
      </div>
      <?php endif; ?>
<?php endif; ?>