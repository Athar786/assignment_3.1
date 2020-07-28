<?php

$database = require 'step_14_bootstrap.php';

$task = $database->selectAll('table-that-does-not-exits');



$tasks = $query->selectAll('test');


?>