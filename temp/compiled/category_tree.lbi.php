
<div id="category_tree">
	<div class="title"><i></i>生态产品</div>
	<ul class="tree">
<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
	<li class="c-<?php echo $this->_var['cat']['idx']; ?>">
		<a href="<?php echo $this->_var['cat']['url']; ?>" class="lv1"><i></i><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
		
		<div class="sub">
			<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
			<dl>
			<dt><a href="<?php echo $this->_var['child']['url']; ?>" class="lv2"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></dt>
			<dd>
				<?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'sub');if (count($_from)):
    foreach ($_from AS $this->_var['sub']):
?>
				<a href="<?php echo $this->_var['sub']['url']; ?>" class="lv3"><?php echo htmlspecialchars($this->_var['sub']['name']); ?></a>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</dd>
			</dl>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
	</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</ul>
</div>

<div class="blank"></div>
