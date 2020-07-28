<?php

$config = require 'step_14_QueryBuilder.php';
require 'step_14_connection.php';

return new QueryBuilder(
	connection::make($config['database'])
);
?>