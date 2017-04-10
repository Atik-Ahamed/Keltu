<?php
include ('config/setup.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page['title']?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php
        include ('config/css.php');
		?>
		<?php
        include ('config/js.php');
		?>
	</head>
	<body>
		<div id="wrap">
		    <?php
            include (D_TEMPLATE.'/navigation.php');
            ?>
		    
			<div id="mainbody" class="container">
						<h2 class="text-center"><?php echo $page['header']; ?></h2>
						
						<div class="container"><?php echo $page['body']; ?></div>
				</div>
		</div>
	<?php
    include (D_TEMPLATE.'/footer.php');
            ?>
    <script src="cutomizejq.js"></script>   
	</body>

</html>