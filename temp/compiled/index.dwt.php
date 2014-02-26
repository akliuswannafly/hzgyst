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
	<iframe src="index_banner.php" width="757px" height="380px" style="border:none;" scrolling="no"></iframe>
	</div>

</div>
<div class="blank"></div>




<?php echo $this->fetch('library/recommend_best.lbi'); ?>

<div class="block clearfix">
<div class="b_intro">
<div class="areaLeft">
	<div class="box inews">
		<h3><b>新闻动态</b></h3>

	</div>
	
	<div class="box iprod">
		<div class="cnt">
			<div class="img">
			<a href="topic.php?topic_id=4">
            <?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['article_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article_list']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['article_list']['iteration']++;
?>
            	<?php if (($this->_foreach['article_list']['iteration'] <= 1)): ?>
				<img src="<?php echo $this->_var['article']['file_url']; ?>" style="width:193px;height:187px;" />
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</a>
			</div>
			<!-- <div class="title">新闻快讯</div>-->
			<div class="summary">
				<?php echo $this->fetch('library/new_articles.lbi'); ?>
			</div>
			<div class="more"><a href="article_cat.php?id=13">&gt;&gt; more</a></div>
		</div>
	</div>
	
	<div class="box imagz">
		<h3><b>电子杂志</b></h3>
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
		<h3><b>创业联盟</b></h3>
			<div class="img_one" style="margin:5px 0 40px;color:#13773A;font-size:14px">
            	<img src="data/article/1393402483438692517.jpg" style="width:226px;height:187px;">
                
                <img src="data/article/1393402483438692517.jpg" style="width:226px;height:187px;margin-left:23px">
                <div style="margin: 4px;"><li style="margin: 0 auto 0 86px;float: left;">联盟单位</li><li style="float:right;margin: 0 86px 0 0;">政府法规</li></div>
            </div>
            <div class="img_one" style="margin:5px 0 40px;color:#13773A;font-size:14px">
            	<img src="data/article/1393402483438692517.jpg" style="width:226px;height:187px;">
                
                <img src="data/article/1393402483438692517.jpg" style="width:226px;height:187px;margin-left:23px">
                <div style="margin: 4px;"><li style="margin: 0 auto 0 86px;float: left;">青年创业</li><li style="float:right;margin: 0 86px 0 0;">创业典型</li></div>
            </div>
	</div>
	
	<!--<div class="box icard">
		<h3><b>源臻生态食品卡</b></h3>
		<div class="cnt">
			<p>源臻精选各种优质商品，推出8选1生态食品卡系列，包含有机蔬菜、进口水果、阳澄湖大闸蟹、云南野生菌、意大利进口橄榄油、法国进口红酒、环球海鲜等产品，希望为更多的企业和家庭提供健康美味的食品和周到贴心的宅配服务。</p>
			<p>除8选1生态食卡外，我们还有生态茶卡和企业定制卡。</p>
			<p><a href="topic.php?topic_id=7">&gt;&gt; 源臻食品卡购买</a></p>
		</div>
	</div>-->
</div>
</div>
</div>

</div>


<?php echo $this->fetch('library/help.lbi'); ?>
 

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
