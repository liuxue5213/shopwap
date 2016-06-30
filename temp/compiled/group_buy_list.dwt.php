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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header_group.lbi'); ?> <?php echo $this->fetch('library/user_here.lbi'); ?>
<div class="content-wrap">
  <div class="w">
    <div class="brand-wrap">
      <ul class="brand clearfix">
        
        <?php if ($this->_var['gb_list']): ?> 
        <?php $_from = $this->_var['gb_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy');if (count($_from)):
    foreach ($_from AS $this->_var['group_buy']):
?>
        <li class=""> <a class="href-wrap clearfix" target="_blank" href="<?php echo $this->_var['group_buy']['url']; ?>"></a>
          <div class="p-img"> <img alt="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>" src="<?php echo $this->_var['group_buy']['goods_img']; ?>"> </div>
          <div class="p-name"> <a class="hrefname" target="_blank" title="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>" href="<?php echo $this->_var['group_buy']['url']; ?>"><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></a> </div>
          <div class="p-price">
            <div class="left"> <span class="col"></span> <span class="col size"><?php echo $this->_var['group_buy']['price_ladder']['0']['formated_price']; ?></span> <span class="col group_block"><br>
              <del><?php echo $this->_var['group_buy']['shop_price']; ?></del></span> </div>
            <div class="right"> <br>
              <?php echo $this->_var['group_buy']['cur_amount']; ?>人参团 </div>
          </div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <?php else: ?> 
        
        <span style="margin:2px 10px; font-size:14px; line-height:36px;"><?php echo $this->_var['lang']['group_goods_empty']; ?></span> 
        <?php endif; ?>
        
      </ul>
    </div>
  </div>
</div>

<?php echo $this->fetch('library/help.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
