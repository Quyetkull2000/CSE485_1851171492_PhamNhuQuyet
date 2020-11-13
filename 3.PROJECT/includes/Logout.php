<?php 
	session_start();
	session_destroy('user');
	// session_unset('user');
	header("location: ../index.php");
 ?>