<?php 
	include_once 'connection.php';

	
	$x = $_GET['x'];
	$x = stripslashes($x);
	$x = mysqli_real_escape_string($conn, $x);
	$x = (int) filter_var($x, FILTER_SANITIZE_NUMBER_INT);


	$query = "SELECT * FROM `news` WHERE id= $x";
	$result = $conn->query($query);

	if ($result && mysqli_num_rows($result) > 0 ) {
		while($row = mysqli_fetch_assoc($result)) {

			echo $row['short_description'] . " " . $row['article'];
			echo "<br>";

		} 
	}
	elseif ($result != $_GET['x']){
		http_response_code(404);
		include('error404.php');
		die();
	}



?>