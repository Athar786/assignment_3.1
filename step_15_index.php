<?php

$database = require 'step_15_bootstrap.php';

$task = $database->selectAll('table-that-does-not-exits');

$pdo = connection::make();
$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('test');


?>