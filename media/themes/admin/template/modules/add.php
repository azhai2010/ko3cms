<?php defined('SYSPATH') OR die('No direct access allowed.');
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<form action="/admin/modules/view" method="post"> <!-- begin form -->
<input type="hidden" name="__form_object" value="formo" id="__form_object" />
<input type="hidden" name="csrf" value="d2XQopR5dryOvezb" id="csrf" />
<div class="box"> <!-- begin box -->
	<h3>添加模块</h3>
	<div class="inside"> <!-- begin inside -->
        <p>
	<label for="title" >模块内容</label>
        <input type="text" id="title" name="title" value=""  />
        </p>
	<p><label for="tags" >说明: <small>(备注)</small></label><input type="text" id="tags" name="tags" value=""  /></p>
        </div> <!-- end inside -->
</div> <!-- end box -->

<p><input type="submit" id="submit" name="submit" value="提交"  /></p>

</form>  <!-- end form -->
