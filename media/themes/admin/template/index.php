<?php defined('SYSPATH') OR die('No direct access allowed.');
/*
Template type: page
Template name: 首页模板
*/
require_once('header.php');
?>

<div id="main"><!-- begin main -->
 <div id="title"><h2><?php echo $Modules; ?></h2></div>
   <div id="left"> <!-- begin left -->
      <div id="sidebar">
          <?php echo $sidebar; ?>
      </div>
   </div> <!-- end left -->

  <div id="content"> <!-- begin content -->
          <?php echo  $content; ?>
  </div> <!-- end content -->
 
 </div> <!-- end main -->

<?php require_once('footer.php'); ?>
