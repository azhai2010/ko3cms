<?php defined('SYSPATH') OR die('No direct access allowed.');
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h3>任务</h3>
<ul>
        <?php foreach($sidebarul as $rows): ?>
          <li><a href="<?php echo $rows['url']; ?>"><?php echo $rows['sidebar']; ?></a> </li>
        <?php endforeach; ?>
</ul>
