<?php
	$name = $_GET['stress'];
	$comments = $_GET['comments'];
	echo "Tack.";
	$file = 'data.txt';
	$message = "\n\nStress level: " . $name . "\nComments: " . $comments;

	file_put_contents($file, $message, FILE_APPEND);
	
	
?>