<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $smart_title; ?></title>

    <?php foreach($css as $rows): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $rows['css']; ?>" media="<?php echo $rows['media'] ?>" />
    <?php endforeach; ?>

    <?php foreach($script as $rows): ?>
        <script type="text/javascript" src="<?php echo $rows['script']; ?>" ></script>
    <?php endforeach; ?>

</head>

<body>
	<div id="dialog" style="display: none;"><?php echo $dialog; ?></div>
	<div id="header">
		<img src="<?php echo $logo; ?>" />
		<div class="info">
			<?php echo $login; ?> 	
                </div>
	</div>

	<div id="navigation">
		<ul>
			<?php foreach($navigation as $rows): ?>
                            <li><a href="<?php echo $rows['url'] ?>"><?php echo $rows['nav']; ?></a></li>
                        <?php endforeach; ?>
		</ul>
	</div>

</body>
</html>
