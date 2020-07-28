<?php

/**
 *  
 */
class connnection 
{

	public static function make($config)
	{
		try{
			return new PDO('mysql:host=localhost;dbname=test','root','');
			return new PDO(
				$config['connection'].';dbname='.$config['name'],
				$config['username'],
				$config['password'],
				$config['options']
			);
		} catch(PDOException $e) {
			die($e->getmessge());
		}
	}
	
}
?>