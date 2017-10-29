<?php

$connection = mysqli_connect('localhost', 'root', 'root', 'blog_2');

if($connection) {
	echo "Yes we are connected!"; 	
} else {
	echo "We are not connected!";
}

?>