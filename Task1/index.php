<?php 

$jsondata = file_get_contents("movies.json");
$json = json_decode($jsondata,true);

echo "<pre>";
	print_r($json);
echo "</pre>"

?>

