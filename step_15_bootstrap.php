<?php

$config = require 'step_15_config.php';
require 'step_15_connection.php';


return new QueryBuilder(
	connection::make($config['database'])
);
?>