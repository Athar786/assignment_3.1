<?php
/**
 * 
 */
class QueryBuilder
{
	public function selectAll($table)
	{
		$statement = $pdo->prepare('select * from test');
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS,'Task');
	}
}

?>