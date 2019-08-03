<?php
$webRoot = $this->app->getWebRoot();
$jsRoot  = $webRoot . 'js/';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
 <?php
 if(isset($title)) echo html::title($title);

 echo html::meta('charset', 'utf-8');
 echo html::meta('viewport', 'width=device-width, initial-scale=1.0');

 css::import($webRoot . 'theme/zui/css/zui.min.css');
 css::import($webRoot . 'theme/my.css');
 css::import($webRoot . 'theme/bootstrap.min.css');
 if(isset($pageCss)) css::internal($pageCss);

 js::import($jsRoot . 'jquery.min.js');
 js::import($jsRoot . 'zui.min.js');
 js::import($jsRoot . 'html5shiv.min.js', 'lt IE 9');
 js::import($jsRoot . 'my.js');
 js::import($jsRoot . 'bootstrap.min.js');
 js::import($jsRoot . 'jquery.min.js');

 js::import($webRoot . 'ueditor/ueditor.config.js');
 js::import($webRoot . 'ueditor/ueditor.all.min.js');
 js::import($webRoot . 'ueditor/ueditor/lang/zh-cn/zh-cn.js');
js::import($webRoot . 'ueditor/ueditor.parse.js');
 js::exportConfigVars();

 echo html::favicon($webRoot . 'favicon.ico');
 if(isset($pageCSS)) css::internal($pageCSS);
 ?>


</head>
<body><div id='main'>
<?php include dirname(__FILE__) . '/nav.html.php';?>
