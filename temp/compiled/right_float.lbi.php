<script> 
lastScrollY=0;
function heartBeat(){ 
var diffY;
if (document.documentElement && document.documentElement.scrollTop)
    diffY = document.documentElement.scrollTop;
else if (document.body)
    diffY = document.body.scrollTop
else
    {/*Netscape stuff*/}
percent=.1*(diffY-lastScrollY); 
if(percent>0)percent=Math.ceil(percent); 
else percent=Math.floor(percent); 
document.getElementById("category_tree").style.top=parseInt(document.getElementById("category_tree").style.top)+percent+"px";
lastScrollY=lastScrollY+percent; 
}
suspendcode="<div id=\"category_tree\" style=\"right:15px;POSITION:absolute;TOP:190px;z-index:100; width:120px; height:200px;\">";
suspendcode+="<div class=\"title\"><i></i>生态产品</div><ul class=\"tree\">";
<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
suspendcode+="<li class=\"c-\"><a href=\"<?php echo $this->_var['cat']['url']; ?>\" class=\"lv\"><i></i><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></li>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
suspendcode+="</ul><div class=\"blank\"></div></div>";
document.write(suspendcode);
window.setInterval("heartBeat()",1); 
</script>