<!DOCTYPE html>
<html>
<head>
	<title>Step 4</title>
	<style>
		header {
			background: #e2e3e3;
			padding: 2px;
			text-align: center;
		}
	</style>
</head>
<body>
<header>
	<h1><?php 

		echo "Hello ".htmlspecialchars($_GET['name']);
	 ?>
	 	
	 </h1>
</header>
</body>
</html>