<html>
<head>
	<title>
		Front door
	</title>
</head>
<?php 
	$bg = $_COOKIE["bg"];
	$fg = $_COOKIE["fg"];
?>
<body bgcolor="<?= $bg ?>" text="<?= $fg ?>">
	
<h1>Welcome to the store.</h1>
<p>
We have many fine products for you to view. 
Please feel free to browse the aisles and stop an assitant at any time. 
But remember, you break it you buy it
</p>

Would you like to <a href="prefselection.html">change your preferences?</a>
</body>
</html>