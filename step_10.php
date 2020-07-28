<?php
require 'step_10_fun.php';

$animal = ['12','21','1','20'];


if(dd($animal)) {
	echo 'You are not old enough';
} else {
	echo "night club";
}
dd($animal);
require 'step_10_view.php';
?>