<div id="slide" class="m">

	
  <ul class="slide-items slide-items-w">
    
    <?php $_from = $this->_var['index_ad_w']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_62391400_1430569616');if (count($_from)):
    foreach ($_from AS $this->_var['index_ad_0_62391400_1430569616']):
?>
    

    
    <li> <a href="<?php echo $this->_var['index_ad_0_62391400_1430569616']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['index_ad_0_62391400_1430569616']['src']; ?>" width="670" height="240"></a> </li>

    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
  </ul>
  
  <ul class="slide-items slide-items-s">
    
    <?php $_from = $this->_var['index_ad_s']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_62391400_1430569616');if (count($_from)):
    foreach ($_from AS $this->_var['index_ad_0_62391400_1430569616']):
?>
    
   
    <li> <a href="<?php echo $this->_var['index_ad_0_62391400_1430569616']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['index_ad_0_62391400_1430569616']['src']; ?>" width="550" height="240"></a> </li>
 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
  </ul>
   <div class="slide-controls slide-controls-w">  <?php $_from = $this->_var['index_ad_w']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_62391400_1430569616');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['index_ad_0_62391400_1430569616']):
        $this->_foreach['foo']['iteration']++;
?><span <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>class="curr"<?php endif; ?>><?php echo $this->_foreach['foo']['iteration']; ?></span><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
   
  <div class="slide-controls slide-controls-s">  <?php $_from = $this->_var['index_ad_s']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_62391400_1430569616');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['index_ad_0_62391400_1430569616']):
        $this->_foreach['foo']['iteration']++;
?><span <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>class="curr"<?php endif; ?>><?php echo $this->_foreach['foo']['iteration']; ?></span><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
</div>
