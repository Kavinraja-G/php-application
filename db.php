<?php
	$script_path = 'users.sql';
	$command = "mysql --user=root -h localhost -D blog_samples < {$script_path}";

	$output = shell_exec($command . '/shellexec.sql');
	$conn = mysqli_connect("localhost","root","","blog_samples");
?>