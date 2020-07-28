<!DOCTYPE html>
<html>
<head>
	<title>Step 8</title>
</head>
<body>
<h1>Task For the Day</h1>
<ul>
	<li>
		<strong>Name:</strong><?= $task['title']; ?>
	</li>

	<li>
		<strong>Due Date:</strong><?= $task['due']; ?>
	</li>

	<li>
		<strong>Person Responsible:</strong><?= $task['assign_to']; ?>
	</li>	

	<li>
		<strong>Status:</strong><?= $task['completed'] ? 'completed':'Incompleted'; ?>
	</li>	
</ul>
</body>
</html>