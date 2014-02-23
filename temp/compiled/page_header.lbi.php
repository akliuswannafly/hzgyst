<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
 

 <div id="topNav" class="clearfix">
<div class="block clearfix">

<div class="f_l">
  <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
   <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
</div>



<div class="f_r">
<?php if ($this->_var['navigator_list']['top']): ?>
<?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
  <a class="a1" href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
  |
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
	
    <a id="g-wb" href="http://e.weibo.com/yuanzhengouwu" target="_blank"><i></i>关注我们</a>
	<a id="g-wx" href="weixin.html" target="_blank" title="源臻网公共微博"><i></i>微信关注</a>
</div> 

</div>
</div>


<div style="position:relative;background:#fff;">
<div class="block clearfix">


<div class="buy_car_bg_box" >

<div class="usermenu">
	<dl>
	<dt><a href="">我的源臻</a></dt>
	<dd>
		<div class="settleup-content">
			<div class="msg">您好，请登录</div>
			<ul>
			<li><a href="#">XXX</a></li>
			</ul>
		</div>
	</dd>
</div>

<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
<div class="cartmenu">
	<dl>
	<dt id="ECS_CARTINFO"><a href="">购物车<b>0</b>件</a></dt>
	<dd>
		<div id="ECS_CARTINFO+" style="float:left">
		<?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
		</div> 
	</dd>
	</dl>
</div> 
</div>



	<div class="f_l" style="padding:8px 0"><a href="index.php" name="top"><img src="themes/ecmoban_kangtu/images/logo.png" width="65" /></a></div>
	<div class="f_l" style="padding:50px 20px 0;"><img src="themes/ecmoban_kangtu/images/banner.png" /></div>
</div>
</div>
 
 
<div id="mainNav" class="clearfix">
<div class="block">
<div class="f_r" style="padding-top:5px;">
<script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
           alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
	<form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="f_r" >
	<div class="B_input_box">
	<input name="keywords" type="text" id="keyword" value="请输入搜索关键字" onclick="javascript:this.value=''" class="B_input"/>
	</div>
	<input name="imageField" type="submit" value="" class="go" style="cursor:pointer;" />
	<div style=" clear:both"></div>
	</form>
</div>

  <a class="a1 <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> cur <?php endif; ?>" href="index.php"  ><?php echo $this->_var['lang']['home']; ?> </a>
  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
 
  <div class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'" >
  <a  class="a1 <?php if ($this->_var['nav']['active'] == 1): ?> cur <?php endif; ?>"  href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
  <?php if ($this->_var['nav']['name'] == '源臻基地'): ?>
  <div class="sub_nav">
<a href="base.php?id=45#1">源臻崇明有机蔬菜基地</a>
<a href="base.php?id=43#1">源臻阳澄湖大闸蟹基地</a>
<a href="base.php?id=44#1">源臻舒兰有机大米基地</a>
<a href="base.php?id=56">源臻生态有机茶园</a>
<a href="base.php?id=46#1">源臻沈湖会员活动基地</a>
  </div>
  <?php endif; ?>
    <?php if ($this->_var['nav']['name'] == '生态礼卡'): ?>
  <div class="sub_nav">
<a href="topic.php?topic_id=11">新年8选1生态食品卡</a>
<a href="topic.php?topic_id=7#1">源臻8选1生态食品卡</a>
<a href="topic.php?topic_id=7#2">源臻6选1生态茶卡</a>
<a href="topic.php?topic_id=7#3">源臻定额生态食品卡</a>
<a href="topic.php?topic_id=7#4">源臻定制卡服务</a>
<a href="topic.php?topic_id=7#5">采购流程</a>
  </div>
  <?php endif; ?>
      <?php if ($this->_var['nav']['name'] == '本味宅配'): ?>
  <div class="sub_nav">
<a href="topic.php?topic_id=3#1">宅配套餐</a>
<a href="data/xls/ben.xlsx">宅配产品清单</a>
<a href="topic.php?topic_id=21" target="_blank">有机蔬菜周菜单</a>
<a href="topic.php?topic_id=3#4">宅配简介</a>
<a href="topic.php?topic_id=3#5">配送服务</a>
  </div>
  <?php endif; ?>
       <?php if ($this->_var['nav']['name'] == '企业采购'): ?>
  <div class="sub_nav">
<a href="topic.php?topic_id=5#1">企业采购简介</a>
<a href="topic.php?topic_id=5#2">方案产品</a>
<a href="topic.php?topic_id=5#3">采购流程</a>
  </div>
  <?php endif; ?> 
  
  </div>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
 </div>
 </div>

<div class="blank"></div>

