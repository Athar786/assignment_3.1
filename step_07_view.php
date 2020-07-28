<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Task For the day</h1>
	
		<ul>
			<?php foreach ($task as $key => $value): ?>
				<li><strong><?= ucwords($key); ?></strong><?= $value; ?></li>
			<?php endforeach; ?>
		</ul>


</body>
</html>