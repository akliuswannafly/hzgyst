
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test</title>
<link href="css/base.css" rel="stylesheet" type="text/css" />
<script src="js/showpic.js" type=text/javascript></script>
</head>
<?php

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
 function get_flash_xml()
{
    $flashdb = array();
    if (file_exists(ROOT_PATH . DATA_DIR . '/flash_data.xml'))
    {
        // 兼容v2.7.0及以前版本
        if (!preg_match_all('/item_url="([^"]+)"\slink="([^"]+)"\stext="([^"]*)"\ssort="([^"]*)"/', file_get_contents(ROOT_PATH . DATA_DIR . '/flash_data.xml'), $t, PREG_SET_ORDER))
        {
            preg_match_all('/item_url="([^"]+)"\slink="([^"]+)"\stext="([^"]*)"/', file_get_contents(ROOT_PATH . DATA_DIR . '/flash_data.xml'), $t, PREG_SET_ORDER);
        }
        if (!empty($t))
        {
            foreach ($t as $key => $val)
            {
                $val[4] = isset($val[4]) ? $val[4] : 0;
                $flashdb[] = array('src'=>$val[1],'url'=>$val[2],'text'=>$val[3],'sort'=>$val[4]);
//print_r($flashdb);
            }
        }
    }
    return $flashdb;
}
?>
<?php
$array = get_flash_xml();
?>

<body>
<div id="ifocus">
  <div id="ifocus_pic">
    <div id="ifocus_piclist">
	 <ul>
     <?php
	 for($i=0;$i<=5;$i++)
	 {
        echo ' <li><a href="http://www.16sucai.com" target="_blank"><img src="'.$array[$i]['src'].'" alt="'.$array[$i]['text'].'" width="757" height="300" ></a></li>';
	 }
	?>
	 </ul>
     </div>
     <div id="ifocus_opdiv"></div>
     <div id="ifocus_tx">
      <ul> 
       <?php
	    for($i=0;$i<=5;$i++){ 
	   if($i==0) 
	   echo ' <li class="current"><a href="http://www.16sucai.com" target="_blank">'.$array[$i]['text'].'</a></li>';
	   else
	   echo ' <li class="normal"><a href="http://www.16sucai.com" target="_blank">'.$array[$i]['text'].'</a></li>';
	  }
	  ?>
       </ul>
      </div>
      </div>
  <div id="ifocus_btn">
    <ul>
     <?php
	  for($i=0;$i<=5;$i++){ 
	   if($i==0) 
	   echo '<li class="current"><a href="http://www.16sucai.com" target="_blank"><img src="'.$array[$i]['src'].'" alt="'.$array[$i]['text'].'" width="100" height="44"></a></li>';
	 
	   else
	   echo '<li class="normal"><a href="http://www.16sucai.com" target="_blank"><img src="'.$array[$i]['src'].'" alt="'.$array[$i]['text'].'" width="100" height="44"></a></li>';
	 }
	 ?>
    </ul>
  </div>
</div>
</body>
</html>



<!--
<body>
<div id="ifocus">
  <div id="ifocus_pic">
    <div id="ifocus_piclist">
      <ul>
        <li><a href="http://www.16sucai.com" target="_blank"><img src="images/img01.jpg" alt="蚝自远方来鲜甜美味" width="757" height="300" ></a></li>
        <h1><li><a href="http://www.16sucai.com" target="_blank"><img src="images/img02.jpg" alt="虫草花鸡汁焖豆腐益" width="757" height="300"></a></li>
        <li><a href="http://www.16sucai.com" target="_blank"><img src="images/img06.jpg" alt="头抽姜葱炒鳝片养血" width="757" height="300"></a></li>
        <li><a href="http://www.16sucai.com" target="_blank"><img src="images/img04.jpg" alt="与营养师吃饭美味与" width="757" height="300"></a></li>
         <li><a href="http://www.16sucai.com" target="_blank"><img src="images/img04.jpg" alt="与营养师吃饭美味与" width="757" height="300"></a></li></h1>
      </ul>
    </div>
    <div id="ifocus_opdiv"></div>
    <div id="ifocus_tx">
      <ul>
        <li class="current"><a href="http://www.16sucai.com" target="_blank">蚝自远方来鲜甜美味</a></li>
        <li class="normal"><a href="http://www.16sucai.com" target="_blank">虫草花鸡汁焖豆腐益</a></li>
        <li class="normal"><a href="http://www.16sucai.com" target="_blank">头抽姜葱炒鳝片养血</a></li>
        <li class="normal"><a href="http://www.16sucai.com" target="_blank">与营养师吃饭美味与</a></li>
         <li class="normal"><a href="http://www.16sucai.com" target="_blank">与营养师吃饭美味与</a></li>
      </ul>
    </div>
  </div>
  <div id="ifocus_btn">
    <ul>
      <li class="current"><a href="http://www.16sucai.com" target="_blank"><img src="images/img01.jpg" alt="蚝自远方来鲜甜美味" width="100" height="44"></a></li>
      <li class="normal"><a href="http://www.16sucai.com" target="_blank"><img src="images/img02.jpg" alt="虫草花鸡汁焖豆腐益" width="100" height="44"></a></li>
      <li class="normal"><a href="http://www.16sucai.com" target="_blank"><img src="images/img06.jpg" alt="头抽姜葱炒鳝片养血" width="100" height="44"></a></li>
      <li class="normal"><a href="http://www.16sucai.com" target="_blank"><img src="images/img04.jpg" alt="与营养师吃饭美味与" width="100" height="44"></a></li>
       <li class="normal"><a href="http://www.16sucai.com" target="_blank"><img src="images/img04.jpg" alt="与营养师吃饭美味与" width="100" height="44"></a></li>
    </ul>
  </div>
</div>
</body>
</html>
-->