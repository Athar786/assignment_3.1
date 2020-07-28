<?php
/**
 * 
 */
require 'step_12_fun.php';
class Task 
{
	public $description;
	protected $completed = true;
	
	public function __construct($description)
	{
		$this->description = $description;
	}


	public function complete()
	
		$this->complete = true;
	}

	public function isComplete()
	{
		return $this->completed;
	}
}
$task = new Task('Go to the Store');
echo $task->description;
dd($task);
?>