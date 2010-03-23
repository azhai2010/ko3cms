<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head><title><?php echo $smart_title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?php echo $csspath; ?>css/style.css" rel="stylesheet" type="text/css"></head>
<body bgcolor="#ffffff" text="#000000">
<div class="top">
  <img src="images/logo.gif" border="0" style="margin-left:20px;">
  <img src="images/title.gif" border="0">
</div>
<div class="tabs">
 <ul>
<?php  foreach ($mainmenu_as_ul as $rows):?>
     <li><a href="<?php echo $rows['url']; ?>"><?php echo $rows['name']; ?></a> </li>
<?php endforeach; ?>
 </ul>
</div>
<div class="personalBar">

</div>
