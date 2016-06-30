

<div class="m m3" id="reading">
<div class="mt">
<h2>最新资讯</h2>

</div>
<div class="mc">
<ul>
<?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
  <li><a href="<?php echo $this->_var['article']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><b>·</b><?php echo sub_str($this->_var['article']['short_title'],25); ?></a></li>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
</ul>
</div>
</div>