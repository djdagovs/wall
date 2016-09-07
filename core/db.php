<?php

$connection = mysqli_connect('localhost', 'root', '', 'wallcms');

if(!$connection){
	echo "error.";
}