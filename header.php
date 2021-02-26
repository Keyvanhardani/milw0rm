<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" <?php error_reporting(0); language_attributes(); ?>>



<head profile="http://gmpg.org/xfn/11">



<link rel="Shortcut Icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">



<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />



<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>



<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />



<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>







<?php  wp_head(); ?>



</head>



<body style="margin-top:10px;"  dir="ltr" text="#008000" vlink="#00c000" alink="#00ff00" background="/images/dot.gif" bgcolor="#000000" link="#00c000">







<center>



<table border="0">



<tbody><tr>



<td nowrap="nowrap">



<b>[ <a href="http://hardani.de/" target="_self" title="Homepage">Home</a> ]</b>



<b>[ <a href="https://github.com/keyvanhardani" target="_blank" title="Github">Github</a> ]</b>



<b>[ <a href="https://www.linkedin.com/in/keyvan-hardani/" target="_blank" title="linkedin">linkedin</a> ]</b><br>











</td> </tr>



</tbody></table>



 



 <table class="main" width="668" border="0" cellpadding="3" cellspacing="3">



  <tbody><tr><td><h1>
	  Keyvan Hardani
	  </h1>


<br>



<div class="search">



<?php get_search_form(); ?>



</div>



</td></tr>