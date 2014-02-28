<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test</title>
<link href="/css/base.css" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'showpic.js')); ?>
</head>
<body>
<div id="ifocus">
  <div id="ifocus_pic">
    <div id="ifocus_piclist">
	 <ul>
<?php $_from = $this->_var['flash_xml']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash');if (count($_from)):
    foreach ($_from AS $this->_var['flash']):
?>
	 <li><a href="#" target="_blank"><img src="<?php echo $this->_var['flash']['src']; ?>" alt="<?php echo $this->_var['flash']['text']; ?>" width="615" height="300" ></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	 </ul>
     </div>
     <div id="ifocus_opdiv"></div>
     <div id="ifocus_tx">
      <ul>
<?php $_from = $this->_var['flash_xml']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash');$this->_foreach['flash_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['flash_list']['total'] > 0):
    foreach ($_from AS $this->_var['flash']):
        $this->_foreach['flash_list']['iteration']++;
?>
	<?php if (($this->_foreach['flash_list']['iteration'] <= 1)): ?>
		<li class="current"><a href="#" target="_blank"><?php echo $this->_var['flash']['text']; ?></a></li>
	<?php else: ?>
		<li class="normal"><a href="#" target="_blank"><?php echo $this->_var['flash']['text']; ?></a></li>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
       </ul>
      </div>
      </div>
  <div id="ifocus_btn">
    <ul>
<?php $_from = $this->_var['flash_xml']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash');$this->_foreach['flash_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['flash_list']['total'] > 0):
    foreach ($_from AS $this->_var['flash']):
        $this->_foreach['flash_list']['iteration']++;
?>
	<?php if (($this->_foreach['flash_list']['iteration'] <= 1)): ?>
		<li class="current"><a href="#" target="_blank"><img src="<?php echo $this->_var['flash']['src']; ?>" alt="<?php echo $this->_var['flash']['text']; ?>" width="100" height="44"></a></li>
	<?php else: ?>
		<li class="normal"><a href="#" target="_blank"><img src="<?php echo $this->_var['flash']['src']; ?>" alt="<?php echo $this->_var['flash']['text']; ?>" width="100" height="44"></a></li>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
    </ul>
  </div>
</div>
</body>
</html>