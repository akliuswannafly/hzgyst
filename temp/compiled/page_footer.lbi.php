<div class="blank"></div><div class="blank"></div>


 
<div class="block">
<div class="helpTitBg clearfix">
	<div class="img"><img src="themes/ecmoban_kangtu/images/shuomin.png"></div>
    <div style="clear:both"> </div>
    <div class="clearfix">
        <div>
        <?php if ($this->_var['helps']): ?>
        <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['no']['iteration']++;
?>
        <dl <?php if (($this->_foreach['no']['iteration'] == $this->_foreach['no']['total'])): ?>
			style="background:none"  
		<?php endif; ?>>
          <dt><a href='<?php echo $this->_var['help_cat']['cat_id']; ?>' title="<?php echo $this->_var['help_cat']['cat_name']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></a></dt>
          <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
          <dd><a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a></dd>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </dl>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>
        </div>
    </div>
</div>

<div class="blank" ></div>


<div id="bottomNav2">
	<div class="phone">
		<p><span>服务热线:</span> <b><?php echo $this->_var['service_phone']; ?></b></p>
		<p>热线服务时间为 工作日9:00-20:00、双休日9:00-18:00，节假日服务时间另作调整</p>
	</div>
 
	<div class="bNavList clearfix" style="display:none">

	<?php if ($this->_var['navigator_list']['bottom']): ?>
	<?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_72952100_1393148986');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_72952100_1393148986']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
	<a href="<?php echo $this->_var['nav_0_72952100_1393148986']['url']; ?>" <?php if ($this->_var['nav_0_72952100_1393148986']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_72952100_1393148986']['name']; ?></a>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<?php endif; ?>
	</div>

</div>


<div class="blank"></div>

<div id="footer">
 <div class="text" >
  <?php echo $this->_var['copyright']; ?> &nbsp; 
  <?php if ($this->_var['icp_number']): ?>
  <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a>
  <?php endif; ?>


    <?php if ($this->_var['stats_code']): ?>
    <div align="left"><?php echo $this->_var['stats_code']; ?></div>
    <?php endif; ?>
	<a href="http://www.zylinkus.com" target="_blank" title="shanghai web design shanghai web development">网站支持</a>
 </div>
</div>
</div>
<div style="display:none">
<script src="http://s19.cnzz.com/stat.php?id=5438873&web_id=5438873" language="JavaScript"></script>
</div>