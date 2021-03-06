<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body class="index_body">
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block clearfix">

<div class="AreaL">


<?php echo $this->fetch('library/category_tree.lbi'); ?>


</div>
 
<div class="AreaR">
 
  

	<div class="box clearfix">
	<iframe src="index_banner.php" width="757" height="408" style="border:none;"></iframe>
	</div>

</div>
<div class="blank"></div>




<?php echo $this->fetch('library/recommend_best.lbi'); ?>

<div class="block clearfix">
<div class="b_intro">
<div class="areaLeft">
	<div class="box inews">
		<h3><b>源臻动态</b></h3>
		<div class="cnt">
			<ul>
			<?php $_from = $this->_var['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'new');if (count($_from)):
    foreach ($_from AS $this->_var['new']):
?>
			<li><span><?php echo $this->_var['new']['add_time']; ?></span><a href="<?php echo $this->_var['new']['url']; ?>"><?php echo $this->_var['new']['title']; ?></a></li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
			<div class="more"><a href="article_cat.php?id=12">&gt;&gt; more</a></div>
		</div>
	</div>
	
	<div class="box iprod">
		<h3><b>寻味天下臻品</b></h3>
		<div class="cnt">
			<div class="img">
			<a href="topic.php?topic_id=4">
			<img src="themes/ecmoban_kangtu/res/gl.jpg" style="width:193px;height:187px;" />
			</a>
			</div>
			<div class="title">国家地标精选 天下美食</div>
			<div class="summary">
				<p>我们的团队寻遍全球，为尊贵的客户甄选最佳原产地的原味臻品。我们精心挑选了数十款来自世界各地具备有机食品认证和国家地理标志认证的环球美食，让您足不出户享饕餮盛宴。</p>
			</div>
			<div class="more"><a href="topic.php?topic_id=4">&gt;&gt; more</a></div>
		</div>
	</div>
	
	<div class="box imagz">
		<h3><b>源臻电子杂志</b></h3>
		<div class="cnt">
			<ul>
			<li><a href="data/ibooks/ibook1.pdf"><img src="themes/ecmoban_kangtu/res/ibook1.jpg" /></a></li>
			<li><a href="data/ibooks/ibook2.pdf"><img src="themes/ecmoban_kangtu/res/ibook2.jpg" /></a></li>
			<li><a href="data/ibooks/ibook3.pdf"><img src="themes/ecmoban_kangtu/res/ibook3.jpg" /></a></li>
			<?php $_from = $this->_var['ibooks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ibook');if (count($_from)):
    foreach ($_from AS $this->_var['ibook']):
?>
			<li><a href="<?php echo $this->_var['ibook']['link']; ?>"><img src="<?php echo $this->_var['ibook']['file_url']; ?>" /></a></li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
		</div>
		<div class="more"><a href="article_cat.php?id=17">&gt;&gt; more</a></div>
	</div>
</div>
<div class="areaRight">
	<div class="box ilgt">
		<h3><b>源臻本味宅配</b></h3>
		<div class="cnt">
			<p>在食品安全问题每况愈下的今天，我们希望自己的亲人不用忧虑，朋友不用担心，可以放心的享受食物的美味。源臻推出本味宅配服务，希望与您一起共筑优质食品生态链。<a href="topic.php?topic_id=3">&gt;&gt; 详细请点击</a></p>
		</div>
	</div>
	
	<div class="box icard">
		<h3><b>源臻生态食品卡</b></h3>
		<div class="cnt">
			<p>源臻精选各种优质商品，推出8选1生态食品卡系列，包含有机蔬菜、进口水果、阳澄湖大闸蟹、云南野生菌、意大利进口橄榄油、法国进口红酒、环球海鲜等产品，希望为更多的企业和家庭提供健康美味的食品和周到贴心的宅配服务。</p>
			<p>除8选1生态食卡外，我们还有生态茶卡和企业定制卡。</p>
			<p><a href="topic.php?topic_id=7">&gt;&gt; 源臻食品卡购买</a></p>
		</div>
	</div>
</div>
</div>
</div>

</div>


<?php echo $this->fetch('library/help.lbi'); ?>
 

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
