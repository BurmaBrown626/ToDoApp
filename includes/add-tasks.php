<?php
	$task = strip_tags($_POST['task']);
	// give a date stamp
	$date = date('Y-m-d');
	// giving a specific date and time
	$time = date('H:i:s');

	include('connect.php');
	// adding our include video 
// running the mysqli connection
	$mysqli = new mysqli('localhost', 'root', 'root', ' tasks');

	// want all the mysqli to query to put all this things into our database
	$mysqli ->query("INSERT INTO tasks VALUES ('', '$task', '$date', '$time')");

	$query = "SELECT = FROM tasks WHERE task='$task' and date='$date' and time='$time' ";

	// logic to show our tasks
	// taking the results of the query

	if ($result = $mysqli->query($query)) {
			while ($row = $result->fetch_assoc()) {
				$task_id = $row['id'];
				$task_name = $row['task'];

			}
		}	

		$mysqli->close();

		echo '<li><span>'.$task_name.'</span><img id="'.$task_id.'" class="delete-button" width="10px" src="images/close.svg" /></li>';

?>